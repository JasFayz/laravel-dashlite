<template>
    <div class="nk-app-root">
        <SmallSidebar/>
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap">
                <!-- main header @s -->
                <Header/>
                <!-- main header @e -->
                <Sidebar/>
                <!-- content @s -->
                <div class="nk-content">
                    <router-view v-slot="{Component}">
                        <transition name="route" mode="out-in">
                            <component :is="Component"></component>
                        </transition>
                    </router-view>
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
    setup() {
    },
};
</script>

<style>
/* router transition */

.route-enter-from {
    opacity: 0;
    transform: translateX(100px)
}

.route-enter-active {
    transition: all 0.3s ease-out;
}

.route-leave-to {
    opacity: 0;
    transform: translateX(-100px);
}
.route-leave--active {
    transition: all 0.3s ease-in;
}


</style>
