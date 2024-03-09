import { ref } from "vue";
import axios from "axios";

axios.defaults.withCredentials = true;
axios.defaults.xsrfCookieName = "XSRF-TOKEN";
axios.defaults.xsrfHeaderName = "X-XSRF-TOKEN";

const error = ref(null);

const register = async (first_name, last_name, email, password) => {
	error.value = null;

	try {
		const response = await axios.post(
			"http://127.0.0.1:8000/api/user/auth/register",
			{
				first_name: first_name,
				last_name: last_name,
				email: email,
				password: password,
			}
		);
		return { response: response.data };
	} catch (axiosError) {
		error.value = axiosError.response
			? axiosError.response.data.message
			: axiosError.message;
	}
};

const useRegister = () => {
	return { register, error };
};

export default useRegister;
