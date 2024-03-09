<template>
	<div class="card">
		<div class="card-body">
			<div class="d-flex flex-wrap align-items-center justify-content-between">
				<div class="d-flex flex-wrap align-items-center">
					<div
						class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1"
					>
						<img
							src="@/assets/images/avatars/01.png"
							alt="User-Profile"
							class="theme-color-default-img img-fluid avatar avatar-100 avatar-rounded"
						/>
						<img
							src="@/assets/images/avatars/avtar_1.png"
							alt="User-Profile"
							class="theme-color-purple-img img-fluid avatar avatar-100 avatar-rounded"
						/>
						<img
							src="@/assets/images/avatars/avtar_2.png"
							alt="User-Profile"
							class="theme-color-blue-img img-fluid avatar avatar-100 avatar-rounded"
						/>
						<img
							src="@/assets/images/avatars/avtar_4.png"
							alt="User-Profile"
							class="theme-color-green-img img-fluid avatar avatar-100 avatar-rounded"
						/>
						<img
							src="@/assets/images/avatars/avtar_5.png"
							alt="User-Profile"
							class="theme-color-yellow-img img-fluid avatar avatar-100 avatar-rounded"
						/>
						<img
							src="@/assets/images/avatars/avtar_3.png"
							alt="User-Profile"
							class="theme-color-pink-img img-fluid avatar avatar-100 avatar-rounded"
						/>
					</div>
					<div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
						<h4 class="me-2 h4">
							{{ user.first_name + " " + user.last_name }}
						</h4>
						<span> - {{ user.position }}</span>
					</div>
				</div>
				<ul
					class="d-flex nav nav-pills mb-0 text-center profile-tab"
					data-toggle="slider-tab"
					id="profile-pills-tab"
					role="tablist"
				>
					<li class="nav-item">
						<a
							class="nav-link active show"
							data-bs-toggle="tab"
							href="#profile-feed"
							role="tab"
							aria-selected="false"
							>Feed</a
						>
					</li>
					<li class="nav-item">
						<a
							class="nav-link"
							data-bs-toggle="tab"
							href="#profile-activity"
							role="tab"
							aria-selected="false"
							>Activity</a
						>
					</li>
					<li class="nav-item">
						<a
							class="nav-link"
							data-bs-toggle="tab"
							href="#profile-friends"
							role="tab"
							aria-selected="false"
							>Friends</a
						>
					</li>
					<li class="nav-item">
						<a
							class="nav-link"
							data-bs-toggle="tab"
							href="#profile-profile"
							role="tab"
							aria-selected="false"
							>Profile</a
						>
					</li>
				</ul>
			</div>
		</div>
	</div>
</template>

<script>
import { useAuthStore } from "@/stores/AuthStore";
import { toRaw, ref } from "vue";

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
