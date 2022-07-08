<template>
    <ul class="nav nav-tabs nav-fill ">
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
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{ lang.toUpperCase() }}
                            </div>
                        </div>
                        <input type="text" class="form-control" :id="id+'_'+lang"
                               v-model="inputValues[lang]"
                               @input="onInputChange"
                               :placeholder="this.inputPlaceholder">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    name: "TranslatableInput",
    props: ['langList', 'id', 'inputPlaceholder', 'modelValue', 'inputValue', 'inputName', 'variableName'],
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
    },
    updated() {
        console.log(this.modelValue)
    }

}
</script>

<style scoped>

</style>
