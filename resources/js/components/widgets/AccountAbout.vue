<template>
	<div class="card">
		<div class="card-header">
			<div class="header-title">
				<h4 class="card-title">About</h4>
			</div>
		</div>
		<div class="card-body">
			<p>{{ user.description }}</p>
			<div class="mb-1">
				Email: <a href="#" class="ms-3">{{ user.email }}</a>
			</div>
			<div class="mb-1">
				Phone: <a href="#" class="ms-3">{{ user.contact_number }}</a>
			</div>
			<div>
				Location: <span class="ms-3">{{ user.country }}</span>
			</div>
		</div>
	</div>
</template>

<script>
import { useAuthStore } from "@/stores/AuthStore";
export default {
	setup() {
		// Data
		const authStore = useAuthStore();
		const user = authStore.currentUser();
		console.log(user);

		return { user };
	},
};
</script>

<style></style>
