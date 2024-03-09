import { defineStore } from "pinia";
import axios from "axios";

export const useGroupStore = defineStore("groupStore", {
	state: () => ({
		groups: JSON.parse(localStorage.getItem("groups")) || null,
		error: null,
	}),
	actions: {
		getGroups() {
			return this.groups;
		},
		async loadGroups(token) {
			try {
				console.log(token);
				const response = await axios.post(
					"http://127.0.0.1:8000/api/group/auth/getAllGroups",
					{},
					{
						headers: {
							Authorization: `Bearer ${token}`,
						},
					}
				);
				this.groups = response.data.groups;
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
