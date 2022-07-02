<template>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <!-- .nk-block-head -->
                <SectionHeader title="CMS Analytics Dashboard" subtitle="Welcome to CMS Analytics Dashboard.">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a
                            href="#"
                            class="btn btn-icon btn-trigger toggle-expand mr-n1"
                            data-target="pageMenu"
                        ><em class="icon ni ni-more-v"></em
                        ></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="drodown">
                                        <a
                                            href="#"
                                            class="
                        dropdown-toggle
                        btn btn-white btn-dim btn-outline-light
                      "
                                            data-toggle="dropdown"
                                        ><em
                                            class="d-none d-sm-inline icon ni ni-calender-date"
                                        ></em
                                        ><span
                                        ><span class="d-none d-md-inline">Last</span> 30
                        Days</span
                                        ><em class="dd-indc icon ni ni-chevron-right"></em
                                        ></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="#"><span>Last 30 Days</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>Last 6 Months</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>Last 1 Year</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-block-tools-opt">
                                    <a href="#" class="btn btn-primary"
                                    ><em class="icon ni ni-reports"></em><span>Reports</span></a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </SectionHeader>
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-8">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form action="#">
                                        <div class="row g-gs">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="addTitle">Title</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="addTitle"
                                                        placeholder="Title"
                                                        v-model="form.title"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Content</label>
                                                    <div class="form-control-wrap">
                                                        <QuillEditor toolbar="full" theme="snow"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-lg-4">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form action="#">
                                        <div class="row g-gs">
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addTags">Tags</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="addTags"
                                                        placeholder="Tags"

                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addSlug">Slug</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="addSlug"
                                                        placeholder="Slug"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Featured Image</label>
                                                    <div class="upload-zone">
                                                        <div class="dz-message" data-dz-message>
                              <span class="dz-message-text"
                              >Drag and drop file</span
                              >
                                                            <span class="dz-message-or">or</span>
                                                            <button class="btn btn-primary">SELECT</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Categories</label>
                                                    <div class="form-control-wrap">
                                                        <select
                                                            class="form-select"
                                                            multiple="multiple"
                                                            data-placeholder="Categories"
                                                        >
                                                            <option value="uncategorized">
                                                                Uncategorized
                                                            </option>
                                                            <option value="covid">Covid</option>
                                                            <option value="seo">SEO</option>
                                                            <option value="website">Website</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Parent</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" data-placeholder="page">
                                                            <option value="main">
                                                                Main Page (No Parent)
                                                            </option>
                                                            <option value="home">Home Page</option>
                                                            <option value="about">About Page</option>
                                                            <option value="service">Service Page</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addDate">Date</label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-calendar"></em>
                                                        </div>
                                                        <input
                                                            type="text"
                                                            class="form-control date-picker"
                                                            id="addDate"
                                                            data-date-format="dd-mm-yyyy"
                                                            placeholder="dd-mm-yyyy"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Select Status</label>
                                                    <div class="form-control-wrap">
                                                        <select
                                                            class="form-select"
                                                            data-placeholder="Status"
                                                        >
                                                            <option value="published">Published</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="draft">Draft</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="g-3 align-center flex-wrap">
                                                        <div class="g">
                                                            <div class="custom-control custom-switch">
                                                                <input
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                    id="addComment"
                                                                />
                                                                <label
                                                                    class="custom-control-label"
                                                                    for="addComment"
                                                                >Allow Comments</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="g">
                                                            <div class="custom-control custom-switch">
                                                                <input
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                    id="addtPings"
                                                                />
                                                                <label
                                                                    class="custom-control-label"
                                                                    for="addtPings"
                                                                >Allow Pings</label
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <ul
                                                        class="
                              align-center
                              flex-wrap flex-sm-nowrap
                              gx-4
                              mt-1
                            "
                                                    >
                                                        <li>
                                                            <button type="submit" class="btn btn-primary">
                                                                Publish Page
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link link-light"
                                                            >Save to Draft</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                    </div>
                    <!-- .row -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    setup() {
        const form = {
            title: 'Example!!',
            content: null
        }

        return {form}
    },
    mounted() {

    }
}
</script>

