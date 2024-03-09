<template>
	<div class="card">
		<div class="card-body">
			<h2 class="counter mb-3">
				<span class="token-name">Crones</span>
				{{ tokenBalance.toLocaleString() }}
			</h2>
			<p class="mb-2">Your Current Balance</p>
			<h6>Wallet Address: {{ userWallet }}</h6>
			<a href="#" class="mt-4 btn btn-danger d-block rounded">Add Token</a>
			<div class="mt-3">
				<div class="pb-3">
					<div class="d-flex align-items-center justify-content-between mb-2">
						<p class="mb-0">Insurance</p>
						<h4>18</h4>
					</div>
					<div
						class="progress bg-soft-info shadow-none w-100"
						style="height: 10px"
					>
						<div
							class="progress-bar bg-info"
							data-toggle="progress-bar"
							role="progressbar"
							aria-valuenow="60"
							aria-valuemin="0"
							aria-valuemax="100"
						></div>
					</div>
				</div>
				<div class="pb-3">
					<div class="d-flex align-items-center justify-content-between mb-2">
						<p class="mb-0">Savings</p>
						<h4>124</h4>
					</div>
					<div
						class="progress bg-soft-success shadow-none w-100"
						style="height: 10px"
					>
						<div
							class="progress-bar bg-success"
							data-toggle="progress-bar"
							role="progressbar"
							aria-valuenow="80"
							aria-valuemin="0"
							aria-valuemax="100"
						></div>
					</div>
				</div>
				<div class="pb-3">
					<div class="d-flex align-items-center justify-content-between mb-2">
						<p class="mb-0">Investment</p>
						<h4>74</h4>
					</div>
					<div
						class="progress bg-soft-primary shadow-none w-100"
						style="height: 10px"
					>
						<div
							class="progress-bar bg-primary"
							data-toggle="progress-bar"
							role="progressbar"
							aria-valuenow="55"
							aria-valuemin="0"
							aria-valuemax="100"
						></div>
					</div>
				</div>
				<div>
					<div class="d-flex align-items-center justify-content-between mb-2">
						<p class="mb-0">Progress</p>
						<h4>89</h4>
					</div>
					<div
						class="progress bg-soft-success shadow-none w-100"
						style="height: 10px"
					>
						<div
							class="progress-bar bg-success"
							data-toggle="progress-bar"
							role="progressbar"
							aria-valuenow="89"
							aria-valuemin="0"
							aria-valuemax="100"
						></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { ref, onMounted } from "vue";

export default {
	props: ["userWallet"],
	setup(props) {
		const userWallet = ref(props.userWallet);
		const tokenBalance = ref(0);

		// Solana JSON-RPC endpoint
		const solanaRpcEndpoint = "https://api.devnet.solana.com";

		const getTokenBalance = async () => {
			const mintAddress = "6Uwnuy5QKfv1df3dzL9e7xAqwwUxJEpZmZeV3aRygokV"; // The mint address of the token

			const requestBody = {
				jsonrpc: "2.0",
				id: 1,
				method: "getTokenAccountsByOwner",
				params: [
					userWallet.value, // User's wallet address
					{ mint: mintAddress },
					{ encoding: "jsonParsed" },
				],
			};

			try {
				const response = await fetch(solanaRpcEndpoint, {
					method: "POST",
					headers: { "Content-Type": "application/json" },
					body: JSON.stringify(requestBody),
				});

				if (!response.ok) {
					throw new Error(`HTTP error! Status: ${response.status}`);
				}

				const responseData = await response.json();
				if (responseData.result && responseData.result.value.length > 0) {
					// Summing up balances from all accounts (if there are multiple)
					tokenBalance.value = responseData.result.value.reduce(
						(total, account) => {
							return (
								total + account.account.data.parsed.info.tokenAmount.uiAmount
							);
						},
						0
					);
				} else {
					console.log("Token account balance not found.");
				}
			} catch (error) {
				console.error("Error fetching token balance:", error);
			}
		};

		onMounted(getTokenBalance);

		return { userWallet, tokenBalance };
	},
};
</script>

<style scoped>
.token-name {
	color: orange;
}
</style>
