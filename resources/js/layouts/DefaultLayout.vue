<template>
  <div class="nk-app-root">
    <SmallSidebar />
    <!-- main @s -->
    <div class="nk-main">
      <!-- wrap @s -->
      <div class="nk-wrap">
        <!-- main header @s -->
        <Header />
        <!-- main header @e -->
        <Sidebar />
        <!-- content @s -->
        <div class="nk-content">
          <router-view />
        </div>
        <!-- content @e -->
      </div>
      <!-- wrap @e -->
    </div>
    <!-- main @e -->
  </div>
</template>

<script>
import SmallSidebar from "./parts/SmallSidebar.vue";
import Header from "./parts/Header.vue";
import Sidebar from "./parts/Sidebar.vue";
export default {
  components: {
    SmallSidebar,
    Header,
    Sidebar,
  },
  setup() {},
};
</script>
