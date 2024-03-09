import { ref } from "vue";
import axios from "axios";

axios.defaults.withCredentials = true;
axios.defaults.xsrfCookieName = "XSRF-TOKEN";
axios.defaults.xsrfHeaderName = "X-XSRF-TOKEN";

const error = ref(null);

const login = async (email, password) => {
	error.value = null;

	try {
		const response = await axios.post(
			"http://127.0.0.1:8000/api/user/auth/login",
			{ email, password }
		);
		return { response: response.data }; // Adjusted based on actual response structure
	} catch (axiosError) {
		error.value = axiosError.response
			? axiosError.response.data.message
			: axiosError.message;
	}
};

const useLogin = () => {
	return { login, error };
};

export default useLogin;
