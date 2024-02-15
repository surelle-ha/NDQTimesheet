<template>
	<div class="card">
		<div class="card-body">
			<h2 class="counter mb-3">$3450</h2>
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
import { defineProps, ref } from "vue";
export default {
	props: ["userWallet"],
	setup(props) {
		const userWallet = ref(props.userWallet);

		return { userWallet };
	},
};
</script>

<style></style>
