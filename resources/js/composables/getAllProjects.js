import { ref } from "vue";
import axios from "axios";
import { useAuthStore } from "@/stores/AuthStore";

const error = ref(null);

const projects = async () => {
	error.value = null;

	const authStore = useAuthStore();

	try {
		const response = await axios.post(
			"http://127.0.0.1:8000/api/project/auth/getAllProjects",
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

const getProjects = () => {
	return { projects, error };
};

export default getProjects;
