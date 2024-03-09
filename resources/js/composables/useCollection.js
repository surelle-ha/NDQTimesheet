import { ref } from "vue";
import { firestore } from "@/config/firestore";
import { collection, addDoc } from "firebase/firestore";

const useCollection = (_collection) => {
	const error = ref(null);

	const addDocs = async (doc) => {
		error.value = null;

		try {
			const objCollection = collection(firestore, _collection);

			await addDoc(objCollection, doc);
		} catch (err) {
			console.log(err.message);
			error.value = "Could not send the message.";
		}
	};

	return { error, addDocs };
};

export default useCollection;
