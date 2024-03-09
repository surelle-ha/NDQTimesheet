<template>
	<div
		class=" "
		data-bs-spy="scroll"
		data-bs-target="#elements-section"
		data-bs-offset="0"
		tabindex="0"
	>
		<Loader />

		<div class="wrapper">
			<section class="login-content">
				<div class="row m-0 align-items-center bg-white vh-100">
					<div
						class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden"
					>
						<img
							src="@/assets/images/auth/05.png"
							class="img-fluid gradient-main animated-scaleX"
							alt="images"
						/>
					</div>
					<div class="col-md-6">
						<div class="row justify-content-center">
							<div class="col-md-10">
								<div
									class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0"
								>
									<div class="card-body">
										<router-view />
									</div>
								</div>
							</div>
						</div>
						<div class="sign-bg sign-bg-right">
							<svg
								width="280"
								height="230"
								viewBox="0 0 421 359"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<g opacity="0.05">
									<rect
										x="-15.0845"
										y="154.773"
										width="543"
										height="77.5714"
										rx="38.7857"
										transform="rotate(-45 -15.0845 154.773)"
										fill="#3A57E8"
									/>
									<rect
										x="149.47"
										y="319.328"
										width="543"
										height="77.5714"
										rx="38.7857"
										transform="rotate(-45 149.47 319.328)"
										fill="#3A57E8"
									/>
									<rect
										x="203.936"
										y="99.543"
										width="310.286"
										height="77.5714"
										rx="38.7857"
										transform="rotate(45 203.936 99.543)"
										fill="#3A57E8"
									/>
									<rect
										x="204.316"
										y="-229.172"
										width="543"
										height="77.5714"
										rx="38.7857"
										transform="rotate(45 204.316 -229.172)"
										fill="#3A57E8"
									/>
								</g>
							</svg>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</template>

<script>
import Loader from "@/components/partials/Loader.vue";

export default {
	components: {
		Loader,
	},
};
</script>

<style></style>
