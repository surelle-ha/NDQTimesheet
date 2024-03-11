import { defineStore } from "pinia";
import axios from "axios";
import { ref } from "vue";

const error = ref(null);

export const useProjectStore = defineStore("projectStore", {
    state: () => ({
        projects: JSON.parse(localStorage.getItem("projects")) || null,
        error: null,
    }),
    actions: {
        getProjects() {
            return this.projects;
        },
        async loadProjects(token) {
            try {
                console.log(token);
                const response = await axios.post(
                    "http://127.0.0.1:8000/api/project/auth/getAllProjects",
                    {},
                    {
                        headers: {
                            Authorization: `Bearer ${token}`,
                        },
                    }
                );
                this.projects = response.data.projects;
                return true; // Indicate success
            } catch (axiosError) {
                if (axiosError.response && axiosError.response.status === 401) {
                    error.value = "Unauthorized access. Please log in again.";
                } else {
                    // Handle other errors
                    error.value = axiosError.response
                        ? axiosError.response.data.message
                        : axiosError.message;
                }
                return false;
            }
        },
    },
});
