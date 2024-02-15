import { ref } from "vue";
import { auth } from "@/config/firebase";
import { signOut } from "firebase/auth";

const error = ref(null);

const logout = async () => {
	error.value = null;

	try {
		signOut(auth).then(() => {
			return true;
		});
	} catch (err) {
		error.value = "An unexpected error occurred: " + err.message;
	}
};

const useLogout = () => {
	return { logout, error };
};

export default useLogout;
