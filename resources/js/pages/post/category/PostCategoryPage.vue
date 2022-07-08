<template>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Categories</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs flex-row-reverse">
                        <div class="col-xxl-7">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                                    <div class="card-inner position-relative card-tools-toggle">
                                        <div class="card-title-group">
                                            <div class="card-tools">
                                                <div class="form-inline flex-nowrap gx-3">
                                                    <div class="form-wrap w-150px">
                                                        <select class="form-select form-select-sm" data-search="off"
                                                                data-placeholder="Bulk Action">
                                                            <option value="">Bulk Action</option>
                                                            <option value="delete">Move To Trash</option>
                                                        </select>
                                                    </div>
                                                    <div class="btn-wrap">
                                                        <span class="d-none d-md-block"><button
                                                            class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                        <span class="d-md-none"><button
                                                            class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                            class="icon ni ni-arrow-right"></em></button></span>
                                                    </div>
                                                </div><!-- .form-inline -->
                                            </div><!-- .card-tools -->
                                        </div><!-- .card-title-group -->
                                    </div>

                                    <div class="card-inner p-0">
                                        <div class=" justify-content-center w-100"
                                             :class="isLoading ? 'd-flex': 'd-none'"
                                        >
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-list nk-tb-ulist" v-show="!isLoading">

                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                        <label class="custom-control-label" for="uid"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span
                                                    class="sub-text">Description</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Parent Category</span>
                                                </div>
                                                <div class="nk-tb-col"><span class="sub-text">Slug</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                            </div><!-- .nk-tb-item -->

                                            <div class="nk-tb-item" v-for="post in postCategories.data">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                               :id=" post.id">
                                                        <label class="custom-control-label" :for="post.id"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span>{{ post.title }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <div class="text-ellipsis w-max-200px">
                                                        {{ post.desc }}
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <div>
                                                        <span>{{ post.parent?.title}}</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span>{{ post.slug }}</span>
                                                </div>

                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon"
                                                               @click="showEditModal"
                                                               :data-model-id="post.id"
                                                               data-target="#editCategory"
                                                               data-placement="top" title="Edit">
                                                                <em class="icon ni ni-edit-fill"
                                                                    style="pointer-events: none"></em>
                                                            </a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Move To Trash">
                                                                <em class="icon ni ni-trash-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#"
                                                                   class="dropdown-toggle btn btn-icon btn-trigger"
                                                                   data-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#" data-toggle="modal"
                                                                               data-target="#editCategory"><em
                                                                            class="icon ni ni-edit-fill"></em><span>Edit Category</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                            class="icon ni ni-trash-fill"></em><span>Trash</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- .modal -->
                                            </div><!-- .nk-tb-item -->

                                        </div><!-- .nk-tb-list -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <pagination v-model="page" :records="total" :per-page="perPage"
                                                            @paginate="changePage"/>
                                            </div>
                                            <!--                                            <div class="g">-->
                                            <!--                                                <div-->
                                            <!--                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">-->
                                            <!--                                                    <div>Page</div>-->
                                            <!--                                                    <div>-->
                                            <!--                                                        <select class="form-select form-select-sm" data-search="on"-->
                                            <!--                                                                v-model="page"-->
                                            <!--                                                                data-dropdown="xs center">-->
                                            <!--                                                            <option value="1">1</option>-->
                                            <!--                                                            <option value="2">2</option>-->
                                            <!--                                                            <option value="4">4</option>-->
                                            <!--                                                            <option value="5">5</option>-->
                                            <!--                                                            <option value="6">6</option>-->
                                            <!--                                                            <option value="7">7</option>-->
                                            <!--                                                            <option value="8">8</option>-->
                                            <!--                                                            <option value="9">9</option>-->
                                            <!--                                                            <option value="10">10</option>-->
                                            <!--                                                            <option value="11">11</option>-->
                                            <!--                                                            <option value="12">12</option>-->
                                            <!--                                                            <option value="13">13</option>-->
                                            <!--                                                            <option value="14">14</option>-->
                                            <!--                                                            <option value="15">15</option>-->
                                            <!--                                                            <option value="16">16</option>-->
                                            <!--                                                            <option value="17">17</option>-->
                                            <!--                                                            <option value="18">18</option>-->
                                            <!--                                                            <option value="19">19</option>-->
                                            <!--                                                            <option value="20">20</option>-->
                                            <!--                                                        </select>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div>OF 102</div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!-- .pagination-goto -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-5">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <form action="#">
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name</label>
                                                    <span class="form-note">The name that appears on your site.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <TranslatableInput
                                                    :langList="['en', 'ru', 'uz', 'cy']"
                                                    :modelValue="form.title"
                                                    variableName="form"
                                                    id="title"
                                                    inputName="title"
                                                    @input:change="setInputValue"
                                                />
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="slug">Slug</label>
                                                    <span class="form-note">The “slug” is URL-friendly version of the name.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="slug"
                                                               v-model="form.slug"
                                                               placeholder="Slug">
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Parent Category</label>
                                                    <span class="form-note">Categories can have a hierarchy.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-control-wrap">
                                                    <select class="form-control" v-model="form.parent">
                                                        <option value="" selected>None</option>
                                                        <option :value="category.id"
                                                                v-for="category in allPostCategory">{{ category.title }}
                                                        </option>
                                                    </select>
                                                    <!--                                                    <select2 v-model="form.parent" :options="allPostCategory"/>-->

                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addDescription">Description</label>
                                                    <span
                                                        class="form-note">The description is not prominent by default.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-control-wrap">
                                                    <TranslatableTextarea :langList="['en', 'ru', 'uz', 'cy']"
                                                                          id="desc"
                                                                          variableName="form"
                                                                          inputName="desc"
                                                                          inputPlaceholder="Desc"
                                                                          @input:change="setInputValue"/>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="form-group mt-2">
                                                    <button type="button" @click="createCategory"
                                                            class="btn btn-lg btn-primary">Add New
                                                        Category
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- form -->
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div>
                </div><!-- .nk-block -->
            </div>
            <div class="modal fade" tabindex="-1" role="dialog"
                 id="editCategory">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal"><em
                            class="icon ni ni-cross-sm"></em></a>
                        <div class="modal-body modal-body-md">
                            <h5 class="modal-title">Edit Categories</h5>
                            <form action="#" class="mt-4">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        <TranslatableInput
                                            :langList="['en', 'ru', 'uz', 'cy']"
                                            :modelValue="editModel.titleLocale"
                                            variable-name="editModel"
                                            :id="'edit_title'"
                                            inputName="title"
                                            @input:change="setInputValue"
                                        />
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"
                                                   for="editSlug">Slug</label>
                                            <input type="text" class="form-control"
                                                   id="editSlug" placeholder="Slug"
                                                   v-model="editModel.slug">
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"
                                                   for="editParent">Parent</label>
                                            <select name="Parent" id="editParent"
                                                    class="form-control" v-model="editModel.parent_id">
                                                <option value="0">None</option>
                                                <option :value="postN.id"
                                                        v-for="postN in allPostCategory">
                                                    {{ postN.title }}
                                                </option>
                                            </select>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <TranslatableTextarea
                                            :langList="['en', 'ru', 'uz', 'cy']"
                                            :id="'desc_edit'"
                                            variable-name="editModel"
                                            :modelValue="editModel.descLocale"
                                            inputName="desc"
                                            inputPlaceholder="Desc"
                                            @input:change="setInputValue"/>
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="button"
                                                        class="btn btn-primary"
                                                        @click="editCategory"
                                                >
                                                    Update
                                                </button>
                                            </li>
                                            <li>
                                                <a href="#" class="link link-light"
                                                   data-dismiss="modal">Cancel</a>
                                            </li>
                                        </ul>
                                    </div><!-- .col -->
                                </div>
                            </form>
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
        </div>
    </div>
</template>

<script>


import TranslatableInput from "../../../components/TranslatableInput";
import TranslatableTextarea from "../../../components/TranslatableTextarea";

export default {
    name: "PostCategoryAddPage",
    components: {TranslatableInput, TranslatableTextarea},
    emits: ['input:change'],
    data() {
        return {
            postCategories: {},
            allPostCategory: {},
            page: 1,
            perPage: 9,
            total: 0,
            isLoading: false,
            editModel: {},
            form: {
                title: {},
                slug: '',
                parent: '',
                desc: {}
            }
        }
    },


    methods: {
        async fetchPostCategory(page = 1) {
            this.isLoading = true
            const response = await axios.get('/posts/category?page=' + page)
            this.postCategories = response.data.data
            this.total = response.data.data.total
            this.isLoading = false
        },
        async fetchAllPostCategory() {
            const response = await axios.get('/posts/category/all');
            this.allPostCategory = response.data

        },
        changePage(pageNumber) {
            this.fetchPostCategory(pageNumber)
        },
        setInputValue(data, variableName, inputName) {
            this[variableName][inputName] = data;
        },
        async createCategory() {
            const data = {
                title: this.form.title,
                slug: this.form.slug,
                parent_id: this.form.parent,
                desc: this.form.desc
            }
            try {
                console.log('Create Post Category')
                axios.post('/posts/category', data);
                this.fetchPostCategory();
            } catch (e) {
                console.log(e);
            }
        },
        async editCategory() {
            const modelId = this.editModel.id

            const data = {
                title: typeof this.editModel.title == 'string' ? this.editModel.titleLocale : this.editModel.title,
                slug: this.editModel.slug,
                parent_id: this.editModel.parent_id,
                desc: typeof this.editModel.desc === 'string' ? this.editModel.descLocale : this.editModel.desc
            }
            console.log(data);
            try {
                axios.put('/posts/category/' + modelId, data)
                this.fetchPostCategory();
                $('#editCategory').modal('hide')
            } catch (e) {
                console.log(e)
            }

        },
        async showEditModal(event) {
            const button = event.target
            const modalId = button.getAttribute('data-target')
            const id = button.getAttribute('data-model-id');
            const {data} = await axios.get('posts/category/' + id);
            this.editModel = await data

            $(modalId).modal('show')
        }
    },
    async mounted() {
        await this.fetchPostCategory();
        await this.fetchAllPostCategory();
    },
    updated() {
        // console.log(this.editModel)
    }
}
</script>


