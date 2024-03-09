import { initializeApp } from "firebase/app";
import { getFirestore, serverTimestamp } from "firebase/firestore";

// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
	apiKey: "AIzaSyCnoDRLpXrSheA0VkcsyCgDLIs_eq_j7iY",
	authDomain: "vue-livechat-98347.firebaseapp.com",
	projectId: "vue-livechat-98347",
	storageBucket: "vue-livechat-98347.appspot.com",
	messagingSenderId: "927502604090",
	appId: "1:927502604090:web:dafd1d98f4aca051a42203",
	measurementId: "G-RXJ7FZ1GKG",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Cloud Firestore and get a reference to the service
const firestore = getFirestore(app);
const timestamp = () => serverTimestamp();

export { firestore, timestamp };
