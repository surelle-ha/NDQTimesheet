<template>
	<div class="card">
		<div class="card-header">
			<div class="header-title">
				<h4 class="card-title">Profile</h4>
			</div>
		</div>
		<div class="card-body">
			<div class="text-center">
				<div class="user-profile">
					<img
						src="@/assets/images/avatars/01.png"
						alt="profile-img"
						class="rounded-pill avatar-130 img-fluid"
					/>
				</div>
				<div class="mt-3">
					<h3 class="d-inline-block">
						{{ user.first_name + " " + user.last_name }}
					</h3>
					<p class="mb-0">
						{{ user.description }}
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<div class="header-title">
				<h4 class="card-title">About User</h4>
			</div>
		</div>
		<div class="card-body">
			<div class="user-bio">
				<p>
					{{ user.description }}
				</p>
			</div>
			<div class="mt-2">
				<h6 class="mb-1">Joined:</h6>
				<p>{{ new Date(user.created_at).toLocaleDateString("en-US") }}</p>
			</div>
			<div class="mt-2">
				<h6 class="mb-1">Lives:</h6>
				<p>{{ user.city + ", " + user.country }}</p>
			</div>
			<div class="mt-2">
				<h6 class="mb-1">Email:</h6>
				<p>
					<a href="#" class="text-body"> {{ user.email }}</a>
				</p>
			</div>
			<div class="mt-2">
				<h6 class="mb-1">Contact:</h6>
				<p>
					<a href="#" class="text-body">{{ user.contact_number }}</a>
				</p>
			</div>
			<div class="mt-2">
				<h6 class="mb-1">Emergency Contact:</h6>
				<p>
					<a href="#" class="text-body">{{ user.emergency_number }}</a>
				</p>
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

		return { user };
	},
};
</script>

<style></style>
