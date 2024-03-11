import { defineStore } from "pinia";
import axios from "axios";
import { ref } from "vue";

const error = ref(null);

export const useClientStore = defineStore("clientStore", {
    state: () => ({
        clients: JSON.parse(localStorage.getItem("clients")) || null,
        error: null,
    }),
    actions: {
        getClients() {
            return this.clients;
        },
        async loadClients(token) {
            try {
                console.log(token);
                const response = await axios.post(
                    "http://127.0.0.1:8000/api/client/auth/getAllClients",
                    {},
                    {
                        headers: {
                            Authorization: `Bearer ${token}`,
                        },
                    }
                );
                this.clients = response.data.clients;
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
