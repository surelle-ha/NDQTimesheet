import { defineStore } from "pinia";
import axios from "axios";
import { ref } from "vue";

const error = ref(null);

export const useUserStore = defineStore("userStore", {
    state: () => ({
        users: JSON.parse(localStorage.getItem("users")) || null,
        userRoles: JSON.parse(localStorage.getItem("userRoles")) || null,
        userAppRoles: JSON.parse(localStorage.getItem("userAppRoles")) || null,
        error: null,
    }),
    actions: {
        getUsers() {
            return this.users;
        },
        getUserRoles() {
            return this.userRoles;
        },
        getUserAppRoles() {
            return this.userAppRoles;
        },
        async loadUsers(token) {
            try {
                const response = await axios.post(
                    "http://127.0.0.1:8000/api/user/auth/getAllUsers",
                    {},
                    {
                        headers: {
                            Authorization: `Bearer ${token}`,
                        },
                    }
                );
                this.users = response.data.users;
                return true; // Indicate success
            } catch (axiosError) {
                if (axiosError.response && axiosError.response.status === 401) {
                    error.value = "Unauthorized access. Please log in again.";
                } else {
                    error.value = axiosError.response
                        ? axiosError.response.data.message
                        : axiosError.message;
                }
                return false;
            }
        },
        async loadUserRoles(token) {
            try {
                const response = await axios.post(
                    "http://127.0.0.1:8000/api/role/fetch",
                    {},
                    {
                        headers: {
                            Authorization: `Bearer ${token}`,
                        },
                    }
                );
                this.roles = response.data.roles;
                return true;
            } catch (axiosError) {
                if (axiosError.response && axiosError.response.status === 401) {
                    error.value = "Unauthorized access. Please log in again.";
                } else {
                    error.value = axiosError.response
                        ? axiosError.response.data.message
                        : axiosError.message;
                }
                return false;
            }
        },
        async loadUserAppRoles(token) {
            try {
                const response = await axios.post(
                    "http://127.0.0.1:8000/api/user/auth/getAllUsers",
                    {},
                    {
                        headers: {
                            Authorization: `Bearer ${token}`,
                        },
                    }
                );
                this.app_roles = response.data.app_roles;
                return true;
            } catch (axiosError) {
                if (axiosError.response && axiosError.response.status === 401) {
                    error.value = "Unauthorized access. Please log in again.";
                } else {
                    error.value = axiosError.response
                        ? axiosError.response.data.message
                        : axiosError.message;
                }
                return false;
            }
        },
    },
});
