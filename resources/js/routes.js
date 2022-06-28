import IndexPage from "./pages/IndexPage";
import AnaliticPage from "./pages/AnaliticPage";
import PostAddPage from './pages/post/PostAddPage';


export default [{
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
        path: "/post/add",
        name: "PostAddPage",
        component: PostAddPage,
    },
];