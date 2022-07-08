<template>
    <ul class="nav nav-tabs nav-fill nav-sm">
        <li class="nav-item p-0" v-for="lang in langList">
            <a class="nav-link py-1  w-100 justify-content-center" :class="{'active': lang == 'en'}" data-toggle="tab"
               :href="'#'+ id+'_'+lang ">{{
                    lang.toUpperCase()
                }}</a>
        </li>
    </ul>
    <div class="tab-content mt-1">
        <div class="tab-pane" :class="{'active': lang == 'en'}" :id="id+'_'+lang" v-for="lang in langList">
            <div class="form-group">
                <div class="form-control-wrap">
                        <textarea type="text" class="form-control form-control-sm no-resize" :id="'name_'+lang"
                                  v-model="inputValues[lang]"
                                  @input="onInputChange"
                                  :placeholder="this.inputPlaceholder +' ' +lang"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    name: "TranslatableInput",
    props: ['langList', 'inputName', 'id', 'inputPlaceholder', 'modelValue', 'inputValue', 'variableName', 'inputName'],
    emits: ['input:change'],
    data() {
        return {
            // inputValues: this.modelValue || {}
        }
    },
    computed: {
        inputValues() {
            return this.modelValue || {}
        }
    },
    methods: {
        onInputChange() {
            this.$emit('input:change', this.inputValues, this.variableName, this.inputName)
        }
    }

}
</script>

<style scoped>

</style>
