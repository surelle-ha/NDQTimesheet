import { ref } from "vue";
import axios from "axios";
import { useAuthStore } from "@/stores/AuthStore";

const error = ref(null);

const groups = async () => {
	error.value = null;

	const authStore = useAuthStore();

	try {
		const response = await axios.post(
			"http://127.0.0.1:8000/api/group/auth/getAllGroups",
			{},
			{
				headers: {
					Authorization: `Bearer ${authStore.getToken()}`,
				},
			}
		);
		console.log(response.data);
		return { response: response.data }; // Adjusted based on actual response structure
	} catch (axiosError) {
		error.value = axiosError.response
			? axiosError.response.data.message
			: axiosError.message;
	}
};

const getGroups = () => {
	return { groups, error };
};

export default getGroups;
