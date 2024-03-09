<template>
	<div class="card">
		<div class="card-body">
			<!-- Show this div only when the wallet is not connected -->
			<div v-if="!walletConnected" class="border-bottom text-center pb-3">
				<div>
					<h5 class="mb-3">No Wallet Connected</h5>
					<p>
						Connect your Solana wallet to view your balance and transactions.
					</p>
					<button class="btn btn-primary mb-2" @click="connectWallet">
						Connect Wallet
					</button>
					<code>{{ walletConnectError }}</code>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { ref, onMounted, onUpdated, watch } from "vue";
import { useWallet } from "solana-wallets-vue";
import { SolflareWalletName } from "@solana/wallet-adapter-solflare";

export default {
	setup(props, context) {
		const walletConnected = ref(false);
		const walletConnectError = ref("");
		const publicKey = ref(null);

		const connectWallet = async () => {
			const { publicKey, connect, select } = useWallet();

			walletConnectError.value = null;

			select(SolflareWalletName);
			try {
				await connect();
				walletConnected.value = publicKey.value !== null;
				console.log(publicKey.value.toBase58());
				if (walletConnected.value) {
					context.emit("wallet-connected", publicKey.value.toBase58());
				}
			} catch (err) {
				walletConnectError.value = err.message;
			}
		};

		// Watch for changes in publicKey
		watch(publicKey, (newValue, oldValue) => {
			if (newValue) {
				// Emit event when publicKey changes
				context.emit("public-key-changed", newValue.toBase58());
			}
		});

		return {
			publicKey,
			walletConnected,
			walletConnectError,
			connectWallet,
		};
	},
};
</script>

<style>
/* Add your styling here */
</style>
