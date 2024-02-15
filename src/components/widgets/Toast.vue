<template>
	<div
		class="toast fade show"
		role="alert"
		aria-live="assertive"
		aria-atomic="true"
		style="position: fixed; top: 20px; right: 20px; z-index: 1050"
	>
		<div class="toast-header">
			<svg
				class="bd-placeholder-img rounded me-2"
				width="20"
				height="20"
				xmlns="http://www.w3.org/2000/svg"
				aria-hidden="true"
				preserveAspectRatio="xMidYMid slice"
				focusable="false"
			>
				<rect width="100%" height="100%" :fill="iconColor"></rect>
			</svg>
			<strong class="me-auto">{{ title }}</strong>
			<small class="text-muted">{{ time }}</small>
			<button
				type="button"
				class="btn-close"
				data-bs-dismiss="toast"
				aria-label="Close"
				@click="closeToast"
			></button>
		</div>
		<div class="toast-body">{{ message }}</div>
	</div>
</template>

<script>
export default {
	props: {
		title: {
			type: String,
			default: "Notification",
		},
		message: {
			type: String,
			required: true,
			default: "Fucker",
		},
		time: {
			type: String,
			default: "Just now",
		},
		iconColor: {
			type: String,
			default: "#007aff",
		},
	},
	methods: {
		closeToast() {
			this.$emit("close");
		},
	},
};
</script>

<style scoped>
/* Add any additional styling here */
</style>
