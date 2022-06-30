import IndexPage from "./pages/IndexPage";
import AnaliticPage from "./pages/AnaliticPage";
import PostAddPage from './pages/post/PostAddPage';
import PostIndexPage from './pages/post/PostIndexPage';

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
        path: '/post',
        component: { template: '<router-view/>' },
        children: [
            {
                path: '',
                name: "PostIndexPage",
                component: PostIndexPage
            },
            {
                path: "add",
                name: "PostAddPage",
                component: PostAddPage
            },
        ]
    },

];
