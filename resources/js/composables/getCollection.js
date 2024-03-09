import { ref, watchEffect } from "vue";
import { firestore } from "@/config/firestore";
import { collection, query, onSnapshot, orderBy } from "firebase/firestore";

const getCollection = (_collection) => {
	const documents = ref([]);
	const error = ref(null);

	let collectionRef = query(
		collection(firestore, _collection),
		orderBy("createdAt")
	);
	const snapshot = onSnapshot(
		collectionRef,
		(snap) => {
			console.log("Snapshotted");
			let results = [];
			snap.docs.forEach((doc) => {
				doc.data().createdAt && results.push({ ...doc.data(), id: doc.id });
			});
			documents.value = results;
			error.value = null;
		},
		(err) => {
			console.log(err.message);
			documents.value = null;
			error.value = "Could not fetch data";
		}
	);

	watchEffect((onCleanup) => {
		onCleanup(() => snapshot());
	});

	return { documents, error };
};

export default getCollection;
