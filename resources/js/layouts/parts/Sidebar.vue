<template>
    <div class="nk-sidebar" data-content="sidebarMenu">
        <div class="nk-sidebar-inner" data-simplebar>
            <ul class="nk-menu nk-menu-md">
                <li class="nk-menu-heading">
                    <h6 class="overline-title text-primary-alt">Dashboard</h6>
                </li>
                <!-- .nk-menu-heading -->
                <li class="nk-menu-item">
                    <router-link to="/dashboard" class="nk-menu-link">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-dashboard"></em
                  ></span>
                        <span class="nk-menu-text">Dashboard</span>
                    </router-link>
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item">
                    <router-link to="/analitics" class="nk-menu-link">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-speed"></em
                  ></span>
                        <span class="nk-menu-text">Analytics</span>
                    </router-link>
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-files"></em
                  ></span>
                        <span class="nk-menu-text">Pages</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <router-link to="/page/add" exact class="nk-menu-link">
                                <span class="nk-menu-text">Add Page</span>
                            </router-link>
                        </li>
                        <li class="nk-menu-item">
                            <router-link to="/page" exact class="nk-menu-link">
                                <span class="nk-menu-text">Page List</span>
                            </router-link>
                        </li>
                        <li class="nk-menu-item">
                            <a href="html/cms/page-sample.html" class="nk-menu-link"
                            ><span class="nk-menu-text">Sample Page</span></a
                            >
                        </li>
                    </ul>
                    <!-- .nk-menu-sub -->
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-template"></em
                  ></span>
                        <span class="nk-menu-text">Post</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <router-link  to="/post" class="nk-menu-link"
                            ><span class="nk-menu-text">All Post</span></router-link
                            >
                        </li>
                        <li class="nk-menu-item">
                            <router-link to="/post/add" class="nk-menu-link"
                            ><span class="nk-menu-text">Add Post</span></router-link
                            >
                        </li>
                        <li class="nk-menu-item">
                            <router-link to="/post/category" class="nk-menu-link"
                            ><span class="nk-menu-text">Categories</span></router-link
                            >
                        </li>
                    </ul>
                    <!-- .nk-menu-sub -->
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item">
                    <a href="html/cms/media.html" class="nk-menu-link">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-img"></em
                  ></span>
                        <span class="nk-menu-text">Media</span>
                    </a>
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item">
                    <a href="html/cms/comments.html" class="nk-menu-link">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-comments"></em
                  ></span>
                        <span class="nk-menu-text">Comments</span>
                    </a>
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item">
                    <a href="html/cms/themes.html" class="nk-menu-link">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-color-palette"></em
                  ></span>
                        <span class="nk-menu-text">Themes</span>
                    </a>
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-opt-alt"></em
                  ></span>
                        <span class="nk-menu-text">Plugins</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="html/cms/plugin-add.html" class="nk-menu-link"
                            ><span class="nk-menu-text">Add Plugins</span></a
                            >
                        </li>
                        <li class="nk-menu-item">
                            <a
                                href="html/cms/plugin-installed.html"
                                class="nk-menu-link"
                            ><span class="nk-menu-text">Installed Plugins</span></a
                            >
                        </li>
                    </ul>
                    <!-- .nk-menu-sub -->
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-user-alt"></em
                  ></span>
                        <span class="nk-menu-text">Users</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="html/cms/user-list.html" class="nk-menu-link"
                            ><span class="nk-menu-text">User List</span></a
                            >
                        </li>
                        <li class="nk-menu-item">
                            <a href="html/cms/user-profile.html" class="nk-menu-link"
                            ><span class="nk-menu-text">User Profile</span></a
                            >
                        </li>
                    </ul>
                    <!-- .nk-menu-sub -->
                </li>
                <!-- .nk-menu-item -->
                <li class="nk-menu-item">
                    <a href="html/cms/settings-general.html" class="nk-menu-link">
                  <span class="nk-menu-icon"
                  ><em class="icon ni ni-setting-alt"></em
                  ></span>
                        <span class="nk-menu-text">Setting</span>
                    </a>
                </li>
                <!-- .nk-menu-item -->
            </ul>
            <!-- .nk-menu -->
        </div>
    </div>
</template>


