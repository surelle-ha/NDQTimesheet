<template>
	<div id="loading">
		<div class="loader simple-loader">
			<div class="loader-body"></div>
		</div>
	</div>
</template>

<script>
export default {
	mounted() {
		this.initLoader();
	},
	methods: {
		initLoader() {
			const loader = this.$el.querySelector(".loader");
			if (loader) {
				setTimeout(() => {
					loader.classList.add("animate__animated", "animate__fadeOut");
					setTimeout(() => {
						loader.classList.add("d-none");
					}, 500);
				}, 500);
			}
		},
	},
};
</script>
