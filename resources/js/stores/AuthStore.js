import { defineStore } from "pinia";
import { ref } from "vue";
import axios from "axios";

const error = ref(null);

export const useAuthStore = defineStore("authStore", {
	state: () => ({
		user: JSON.parse(localStorage.getItem("user")) || null,
	}),
	actions: {
		currentUser() {
			return this.user?.user || null;
		},
		getToken() {
			return this.user?.access_token || null;
		},
		getTokenType() {
			return this.user?.token_type || null;
		},
		async validateToken() {
			if (!this.getToken()) {
				return false;
			}

			try {
				const response = await axios.post(
					"http://127.0.0.1:8000/api/user/auth/validateToken",
					{},
					{
						headers: {
							Authorization: `Bearer ${this.getToken()}`,
						},
					}
				);

				if (response.data.success) {
					return true;
				} else {
					this.destroyUser();
					return false;
				}
			} catch (axiosError) {
				error.value = axiosError.response
					? axiosError.response.data.message
					: axiosError.message;
				this.destroyUser();
				return false;
			}
		},
		assignUser(userCredentials) {
			this.user = userCredentials;
			localStorage.setItem("user", JSON.stringify(userCredentials));
		},
		destroyUser() {
			this.user = null;
			localStorage.removeItem("user");
		},
	},
});
