import { ref } from "vue";
import axios from "axios";
import { useAuthStore } from "@/stores/AuthStore";

const error = ref(null);

const logs = async () => {
	error.value = null;

	const authStore = useAuthStore();

	try {
		const response = await axios.post(
			"http://127.0.0.1:8000/api/system/developer/getLogs",
			{},
			{
				headers: {
					Authorization: `Bearer ${authStore.getToken()}`,
				},
			}
		);
		return { response: response.data };
	} catch (axiosError) {
		error.value = axiosError.response
			? axiosError.response.data.message
			: axiosError.message;
	}
};

const getDeveloperLogs = () => {
	return { logs, error };
};

export default getDeveloperLogs;
