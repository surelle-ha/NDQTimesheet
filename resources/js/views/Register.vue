<template>
	<router-link
		:to="{ name: 'Login' }"
		class="navbar-brand d-flex align-items-center mb-3"
	>
		<!--Logo start-->
		<!--logo End-->

		<!--Logo start-->
		<div class="logo-main">
			<div class="logo-normal">
				<svg
					class="text-primary icon-30"
					viewBox="0 0 30 30"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<rect
						x="-0.757324"
						y="19.2427"
						width="28"
						height="4"
						rx="2"
						transform="rotate(-45 -0.757324 19.2427)"
						fill="currentColor"
					/>
					<rect
						x="7.72803"
						y="27.728"
						width="28"
						height="4"
						rx="2"
						transform="rotate(-45 7.72803 27.728)"
						fill="currentColor"
					/>
					<rect
						x="10.5366"
						y="16.3945"
						width="16"
						height="4"
						rx="2"
						transform="rotate(45 10.5366 16.3945)"
						fill="currentColor"
					/>
					<rect
						x="10.5562"
						y="-0.556152"
						width="28"
						height="4"
						rx="2"
						transform="rotate(45 10.5562 -0.556152)"
						fill="currentColor"
					/>
				</svg>
			</div>
			<div class="logo-mini">
				<svg
					class="text-primary icon-30"
					viewBox="0 0 30 30"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<rect
						x="-0.757324"
						y="19.2427"
						width="28"
						height="4"
						rx="2"
						transform="rotate(-45 -0.757324 19.2427)"
						fill="currentColor"
					/>
					<rect
						x="7.72803"
						y="27.728"
						width="28"
						height="4"
						rx="2"
						transform="rotate(-45 7.72803 27.728)"
						fill="currentColor"
					/>
					<rect
						x="10.5366"
						y="16.3945"
						width="16"
						height="4"
						rx="2"
						transform="rotate(45 10.5366 16.3945)"
						fill="currentColor"
					/>
					<rect
						x="10.5562"
						y="-0.556152"
						width="28"
						height="4"
						rx="2"
						transform="rotate(45 10.5562 -0.556152)"
						fill="currentColor"
					/>
				</svg>
			</div>
		</div>
		<!--logo End-->

		<h4 class="logo-title ms-3">CRONEX</h4>
	</router-link>
	<h2 class="mb-2 text-center">Sign Up</h2>
	<p class="text-center">Create your Cronex account.</p>
	<form @submit.prevent="handleRegister">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="full-name" class="form-label">First Name</label>
					<input
						type="text"
						class="form-control"
						id="full-name"
						placeholder=" "
						v-model="first_name"
						required
					/>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="last-name" class="form-label">Last Name</label>
					<input
						type="text"
						class="form-control"
						id="last-name"
						placeholder=" "
						v-model="last_name"
						required
					/>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<label for="email" class="form-label">Email</label>
					<input
						type="email"
						class="form-control"
						id="email"
						placeholder=" "
						v-model="email"
						required
					/>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="password" class="form-label">Password</label>
					<input
						type="password"
						class="form-control"
						id="password"
						placeholder=" "
						v-model="password"
						required
					/>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="confirm-password" class="form-label"
						>Confirm Password</label
					>
					<input
						type="text"
						class="form-control"
						id="confirm-password"
						placeholder=" "
						v-model="repassword"
						required
					/>
				</div>
			</div>
			<div class="col-lg-12 d-flex justify-content-center">
				<div class="form-check mb-3">
					<input
						type="checkbox"
						class="form-check-input"
						id="customCheck1"
						v-model="terms"
						required
					/>
					<label class="form-check-label" for="customCheck1"
						>I agree with the terms of use</label
					>
				</div>
			</div>
		</div>
		<div v-if="error" class="alert alert-warning" role="alert">
			<p>{{ error }}</p>
		</div>
		<div class="d-flex justify-content-center">
			<button type="submit" class="btn btn-primary">Sign Up</button>
		</div>
		<div v-if="false">
			<p class="text-center my-3">or sign in with other accounts?</p>
			<div class="d-flex justify-content-center">
				<ul class="list-group list-group-horizontal list-group-flush">
					<li class="list-group-item border-0 pb-0">
						<a href="#"><img src="@/assets/images/brands/fb.svg" alt="fb" /></a>
					</li>
					<li class="list-group-item border-0 pb-0">
						<a href="#"><img src="@/assets/images/brands/gm.svg" alt="gm" /></a>
					</li>
					<li class="list-group-item border-0 pb-0">
						<a href="#"><img src="@/assets/images/brands/im.svg" alt="im" /></a>
					</li>
					<li class="list-group-item border-0 pb-0">
						<a href="#"><img src="@/assets/images/brands/li.svg" alt="li" /></a>
					</li>
				</ul>
			</div>
		</div>
		<p class="mt-3 text-center">
			Already have an Account
			<router-link :to="{ name: 'Login' }" class="text-underline"
				>Sign In</router-link
			>
		</p>
	</form>
</template>

<script>
import useRegister from "@/composables/useRegister";
import { useRouter } from "vue-router";
import { ref } from "vue";

export default {
	setup() {
		// Data
		const first_name = ref("");
		const last_name = ref("");
		const email = ref("");
		const password = ref("");
		const repassword = ref("");
		const terms = ref(false);

		const router = useRouter();
		const { register, error } = useRegister();

		// Methods
		const handleRegister = async () => {
			if (terms.value != true) {
				error.value = "Please agree to the terms and conditions.";
			} else if (password.value != repassword.value) {
				error.value = "Password mismatched";
			} else {
				let response = await register(
					first_name.value,
					last_name.value,
					email.value,
					password.value
				);

				response = response.response;

				console.log(response);
				if (response.success) {
					router.push({ name: "Login" });
				} else {
					error.value = response.message;
				}
			}
		};

		return {
			first_name,
			last_name,
			email,
			password,
			repassword,
			terms,
			handleRegister,
			error,
		};
	},
};
</script>

<style>
.alert p {
	text-align: center;
}
</style>
