<template>
	<div
		class="modal fade"
		id="staticBackdrop"
		data-bs-backdrop="static"
		data-bs-keyboard="false"
		tabindex="-1"
		aria-labelledby="staticBackdropLabel"
		aria-hidden="true"
	>
		<div class="modal-dialog" style="z-index: 1050">
			<!-- Added inline z-index style -->
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">{{ user }}</h5>
					<button
						type="button"
						class="btn-close"
						data-bs-dismiss="modal"
						aria-label="Close"
					></button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<div class="alert alert-warning" v-if="error">
						{{ error }}
					</div>
					<button
						type="button"
						class="btn btn-secondary"
						data-bs-dismiss="modal"
					>
						Close
					</button>
					<button
						type="button"
						class="btn btn-primary"
						@click="handleCore(user)"
					>
						Understood
					</button>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { ref } from "vue";
import removeUser from "@/composables/removeUser"; // Import the removeUser function
import { useRouter } from "vue-router";

export default {
	props: ["user"],
	setup(props) {
		let error = ref(null);
		const router = useRouter();

		const handleCore = async () => {
			try {
				console.log(props.user);
				if (await removeUser(props.user)) {
					console.log("success");
					$("#staticBackdrop").modal("hide");
					router.push({
						name: "Users",
						query: { reload: new Date().getTime() },
					});
				} else {
					error.value = "Something went wrong!";
				}
			} catch (axiosError) {
				error.value = "Error: " + axiosError.message;
			}
		};

		return { handleCore, error };
	},
};
</script>

<style>
/* Additional styling for the modal can go here */
</style>
