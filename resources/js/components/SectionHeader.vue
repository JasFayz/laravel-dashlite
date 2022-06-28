<template>
  <div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
      <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">CMS Analytics Dashboard</h3>
        <div class="nk-block-des text-soft">
          <p>Welcome to CMS Analytics Dashboard.</p>
        </div>
      </div>
      <!-- .nk-block-head-content -->
      <div class="nk-block-head-content">
        <slot />
      </div>
      <!-- .nk-block-head-content -->
    </div>
    <!-- .nk-block-between -->
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    subtitle: String
  },
  setup() {},
};
</script>
