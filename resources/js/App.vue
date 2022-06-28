<template>
  <component :is="layout">
    <slot></slot>
  </component>
</template>


<script>
import DefaultLayout from './layouts/DefaultLayout.vue'

export default {
  data: ()  => ({
    layout: DefaultLayout
  }),
  components: {DefaultLayout},

};
</script>
