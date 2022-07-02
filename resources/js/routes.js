import IndexPage from "./pages/IndexPage";
import AnaliticPage from "./pages/AnaliticPage";
import PageAddPage from './pages/page/PageAddPage';
import PageIndexPage from './pages/page/PageIndexPage';
import PostIndexPage from "./pages/post/PostIndexPage";
import PostAddPage from "./pages/post/PostAddPage";
import PostCategoryPage from "./pages/post/category/PostCategoryPage";

export default [
    {
        path: "/dashboard",
        name: "DashboardPage",
        component: IndexPage,
    },
    {
        path: "/analitics",
        name: "AnaliticPage",
        component: AnaliticPage,
    },
    {
        path: '/page',
        component: {template: '<router-view/>'},
        children: [
            {
                path: '',
                name: "PageIndexPage",
                component: PageIndexPage
            },
            {
                path: "add",
                name: "PageAddPage",
                component: PageAddPage
            },
        ]
    },
    {
        path: '/post',
        component: {template: '<router-view />'},
        children: [
            {
                path: '',
                name: "PostIndexPage",
                component: PostIndexPage
            },
            {
                path: 'add',
                component: PostAddPage
            },
            {
                path: 'category',
                component: PostCategoryPage
            }
        ]
    }

];
