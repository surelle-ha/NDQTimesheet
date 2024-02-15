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
	<h2 class="mb-2 text-center">Sign In</h2>
	<p class="text-center">Login to stay connected.</p>
	<form>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<label for="email" class="form-label">Email</label>
					<input
						type="email"
						class="form-control"
						id="email"
						aria-describedby="email"
						placeholder=" "
					/>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<label for="password" class="form-label">Password</label>
					<input
						type="password"
						class="form-control"
						id="password"
						aria-describedby="password"
						placeholder=" "
					/>
				</div>
			</div>
			<div class="col-lg-12 d-flex justify-content-between">
				<div class="form-check mb-3">
					<input type="checkbox" class="form-check-input" id="customCheck1" />
					<label class="form-check-label" for="customCheck1">Remember Me</label>
				</div>
				<a href="recoverpw">Forgot Password?</a>
			</div>
		</div>
		<div class="d-flex justify-content-center">
			<button type="submit" class="btn btn-primary">Sign In</button>
		</div>
		<p class="text-center my-3">or sign in with other accounts?</p>
		<div class="d-flex justify-content-center">
			<ul class="list-group list-group-horizontal list-group-flush">
				<li class="list-group-item border-0 pb-0">
					<a href="#"><img src="@/assets/images/brands/fb.svg" alt="fb" /></a>
				</li>
				<li class="list-group-item border-0 pb-0" @click="handleGoogleAuth">
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
		<p class="mt-3 text-center">
			Don’t have an account?
			<router-link :to="{ name: 'Register' }" class="text-underline"
				>Click here to sign up.</router-link
			>
		</p>
	</form>
</template>

<script>
import useLogin from "@/composables/useLogin";
import { useRouter } from "vue-router";

export default {
	setup() {
		// Data
		const router = useRouter();
		const { login, error } = useLogin();

		// Methods
		const handleGoogleAuth = async () => {
			await login();
			if (!error.value) {
				router.push({ name: "Dashboard" });
			}
		};

		return { handleGoogleAuth, login, error };
	},
};
</script>

<style></style>
