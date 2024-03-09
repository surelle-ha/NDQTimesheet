import { defineStore } from "pinia";
import axios from "axios";

export const useUserStore = defineStore("userStore", {
    state: () => ({
        users: JSON.parse(localStorage.getItem("users")) || null,
        error: null,
    }),
    actions: {
        getUsers() {
            return this.users;
        },
        async loadUsers(token) {
            try {
                console.log(token);
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
                this.error = axiosError.response
                    ? axiosError.response.data.message
                    : axiosError.message;
                return false;
            }
        },
    },
});
