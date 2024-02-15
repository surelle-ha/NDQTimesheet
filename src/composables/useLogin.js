import { ref } from "vue";
import { auth, provider } from "@/config/firebase";
import {
	signInWithRedirect,
	signInWithPopup,
	GoogleAuthProvider,
} from "firebase/auth";

const error = ref(null);

const login = async () => {
	error.value = null;

	try {
		await signInWithPopup(auth, provider)
			.then((result) => {
				error.value = null;

				const credential = GoogleAuthProvider.credentialFromResult(result);
				const token = credential.accessToken;
				// The signed-in user info.
				const user = result.user;

				console.log(token);
				console.log(user);

				return { user, token };
			})
			.catch((error) => {
				error.value = error.message;
			});
	} catch (err) {
		error.value = "An unexpected error occurred: " + err.message;
	}
};

const useLogin = () => {
	return { login, error };
};

export default useLogin;
