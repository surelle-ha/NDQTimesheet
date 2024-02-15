import { createRouter, createWebHistory } from "vue-router";

// Configuration
import { auth } from "@/config/firebase";

// Layout View
import AuthLayout from "../layouts/AuthLayout.vue";
import DashboardLayout from "../layouts/DashboardLayout.vue";

// View
import Dashboard from "../views/Dashboard.vue";
import Administrator from "../views/Administrator.vue";
import Clients from "../views/Clients.vue";
import Users from "../views/Users.vue";
import Groups from "../views/Groups.vue";

import Login from "../views/Login.vue";
import Register from "../views/Register.vue";

import Error404 from "@/views/Error404.vue";

// auth guard
const requireAuth = (to, from, next) => {
	let user = auth.currentUser;
	if (!user) {
		next({ name: "Login" });
	} else {
		next();
	}
};

const requireNoAuth = (to, from, next) => {
	let user = auth.currentUser;
	if (user) {
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
			},
			{
				path: "register",
				name: "Register",
				component: Register,
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
			},
			{
				path: "admin",
				name: "Administrator",
				component: Administrator,
			},
			{
				path: "clients",
				name: "Clients",
				component: Clients,
			},
			{
				path: "users",
				name: "Users",
				component: Users,
			},
			{
				path: "groups",
				name: "Groups",
				component: Groups,
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
	history: createWebHistory(process.env.BASE_URL),
	routes,
});

export default router;
