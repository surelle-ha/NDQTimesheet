// Import System
import { createApp } from "vue";
import App from "./App.vue";

import PrimeVue from "primevue/config";
import "primevue/resources/themes/lara-light-blue/theme.css";

// Import Pinia
import { createPinia } from "pinia";

// Import Router
import router from "./router";

// Import Buffer
import { Buffer } from "buffer";
window.Buffer = Buffer;

// Import Emitter
import mitt from "mitt";

// Import Solana
import {
    PhantomWalletAdapter,
    SolflareWalletAdapter,
} from "@solana/wallet-adapter-wallets";
import { initWallet } from "solana-wallets-vue";
import "solana-wallets-vue/styles.css";

// Configure Pinia
const pinia = createPinia();

// Configure Emitter
const emitter = mitt();

// Configure Solana
const wallets = [new PhantomWalletAdapter(), new SolflareWalletAdapter()];
initWallet({ wallets, autoConnect: true });

let app = createApp(App);

app.use(pinia);
app.use(router);
app.use(PrimeVue);
app.provide("emitter", emitter);
app.mount("#app");
