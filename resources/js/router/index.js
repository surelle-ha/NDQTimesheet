import { createRouter, createWebHistory } from "vue-router";

// Layout View
import AuthLayout from "../layouts/AuthLayout.vue";
import DashboardLayout from "../layouts/DashboardLayout.vue";

// View
import Dashboard from "../views/Dashboard.vue";
import Administrator from "../views/Administrator.vue";
import Clients from "../views/Clients.vue";
import Projects from "../views/Projects.vue";
import Users from "../views/Users.vue";
import UserRoles from "../views/UserRoles.vue";
import UserAppRoles from "../views/UserAppRoles.vue";
import Groups from "../views/Groups.vue";
import DeveloperChat from "../views/DeveloperChat.vue";
import DeveloperLogs from "../views/DeveloperLogs.vue";
import DeveloperAPISettings from "../views/DeveloperAPISettings.vue";
import DeveloperThemeSettings from "../views/DeveloperThemeSettings.vue";

// View - Authentication
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";

// View - Errors
import Error404 from "@/views/Error404.vue";

// Authentication Store
import { useAuthStore } from "@/stores/AuthStore";

// Auth Guards
const requireAuth = async (to, from, next) => {
    console.log("accessed");
    const authStore = useAuthStore();
    const isValidToken = await authStore.validateToken();
    console.log("accessed!!", isValidToken);
    if (!isValidToken) {
        authStore.destroyUser();
        next({ name: "Login" });
    } else {
        next();
    }
};

const requireNoAuth = async (to, from, next) => {
    const authStore = useAuthStore();
    const isValidToken = await authStore.validateToken();
    if (isValidToken) {
        next({ name: "Dashboard" });
    } else {
        next();
    }
};

const routes = [
    {
        path: "/auth",
        name: "AuthLayout",
        component: AuthLayout,
        beforeEnter: requireNoAuth,
        children: [
            {
                path: "login",
                name: "Login",
                component: Login,
                beforeEnter: requireNoAuth,
            },
            {
                path: "register",
                name: "Register",
                component: Register,
                beforeEnter: requireNoAuth,
            },
        ],
    },
    {
        path: "/",
        name: "DashboardLayout",
        component: DashboardLayout,
        beforeEnter: requireAuth,
        children: [
            {
                path: "/",
                name: "Dashboard",
                component: Dashboard,
                beforeEnter: requireAuth,
            },
            {
                path: "admin",
                name: "Administrator",
                component: Administrator,
                beforeEnter: requireAuth,
            },
            {
                path: "clients",
                name: "Clients",
                component: Clients,
                beforeEnter: requireAuth,
            },
            {
                path: "projects",
                name: "Projects",
                component: Projects,
                beforeEnter: requireAuth,
            },
            {
                path: "users",
                name: "Users",
                component: Users,
                beforeEnter: requireAuth,
            },
            {
                path: "user/roles",
                name: "UserRoles",
                component: UserRoles,
                beforeEnter: requireAuth,
            },
            {
                path: "user/app/roles",
                name: "UserAppRoles",
                component: UserAppRoles,
                beforeEnter: requireAuth,
            },
            {
                path: "groups",
                name: "Groups",
                component: Groups,
                beforeEnter: requireAuth,
            },
            {
                path: "developer/chat",
                name: "DeveloperChat",
                component: DeveloperChat,
                beforeEnter: requireAuth,
            },
            {
                path: "developer/api/settings",
                name: "DeveloperAPISettings",
                component: DeveloperAPISettings,
                beforeEnter: requireAuth,
            },
            {
                path: "developer/theme/settings",
                name: "DeveloperThemeSettings",
                component: DeveloperThemeSettings,
                beforeEnter: requireAuth,
            },
            {
                path: "developer/logs",
                name: "DeveloperLogs",
                component: DeveloperLogs,
                beforeEnter: requireAuth,
            },
        ],
    },
    {
        path: "/:catchAll(.*)",
        name: "NotFound",
        component: Error404,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
