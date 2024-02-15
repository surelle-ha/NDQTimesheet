// Import System
import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";

// Import Emitter
import mitt from "mitt";

// Import Firebase
import { auth } from "@/config/firebase";
import { onAuthStateChanged } from "firebase/auth";

// Import Solana
import {
	PhantomWalletAdapter,
	SolflareWalletAdapter,
} from "@solana/wallet-adapter-wallets";
import { initWallet } from "solana-wallets-vue";
import "solana-wallets-vue/styles.css";

// Configure System
let app;

// Configure Emitter
const emitter = mitt();

// Configure Solana
const wallets = [new PhantomWalletAdapter(), new SolflareWalletAdapter()];
initWallet({ wallets, autoConnect: true });

// Kickstart Webapp
onAuthStateChanged(auth, () => {
	if (!app) {
		app = createApp(App).use(router).provide("emitter", emitter).mount("#app");
	}
});
