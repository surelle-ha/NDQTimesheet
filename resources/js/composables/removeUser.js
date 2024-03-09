import { ref } from "vue";
import axios from "axios";
import { useAuthStore } from "@/stores/AuthStore";

const error = ref(null);

const removeUser = async (id) => {
	error.value = null;

	const authStore = useAuthStore();

	try {
		const response = await axios.post(
			"http://127.0.0.1:8000/api/user/removeUser",
			{
				id: id,
			},
			{
				headers: {
					Authorization: `Bearer ${authStore.getToken()}`,
				},
			}
		);
		console.log(response.data.success);
		if (response.data.success) {
			return true;
		} else {
			return false;
		}
	} catch (axiosError) {
		return false;
	}
};

export default removeUser;
