<template>
	<div class="container-fluid content-inner mt-n5 py-0">
		<div class="row">
			<div class="col-sm-4">
				<div
					class="card swiper-slide card card-slide"
					data-aos="fade-up"
					data-aos-delay="300"
				>
					<div class="card-header d-flex justify-content-between">
						<div class="header-title">
							<h4 class="card-title">Developer Communication</h4>
						</div>
					</div>
					<div class="card-body"></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div
					class="card swiper-slide card card-slide"
					data-aos="fade-up"
					data-aos-delay="300"
				>
					<div class="card-header d-flex justify-content-between">
						<div class="header-title">
							<h4 class="card-title">Developer Communication</h4>
						</div>
					</div>
					<div class="card-body">
						<!-- Error Alert -->
						<div v-if="error" class="alert alert-danger">
							{{ error }}
						</div>

						<!-- Messages Container -->
						<div
							v-if="documents"
							style="height: 600px; overflow-y: auto"
							ref="messagesContainer"
						>
							<div v-for="doc in formattedDocuments" :key="doc.id" class="mb-3">
								<!-- Message Meta -->
								<div class="d-flex justify-content-between align-items-center">
									<span class="text-muted small">{{ doc.user_name }}</span>
									<span class="text-muted small">{{ doc.createdAt }}</span>
								</div>
								<!-- Message Text -->
								<div class="badge bg-primary p-2">{{ doc.message }}</div>
							</div>
						</div>

						<!-- Message Input Form -->
						<form class="mt-3">
							<div class="input-group">
								<textarea
									class="form-control"
									placeholder="Type a message and hit enter to send..."
									v-model="message"
									@keypress.enter.prevent="handleMessageSubmit"
								></textarea>
								<button
									class="btn btn-primary"
									type="button"
									@click="handleMessageSubmit"
								>
									Send
								</button>
							</div>
							<!-- Submission Error -->
							<div v-if="submitError" class="text-danger mt-2">
								{{ submitError }}
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div
					class="card swiper-slide card card-slide"
					data-aos="fade-up"
					data-aos-delay="300"
				>
					<div class="card-header d-flex justify-content-between">
						<div class="header-title">
							<h4 class="card-title">Developer Communication</h4>
						</div>
					</div>
					<div class="card-body"></div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import getCollection from "@/composables/getCollection";
import useCollection from "@/composables/useCollection";
import { formatDistanceToNow } from "date-fns";
import { computed, onUpdated, ref } from "vue";
import { timestamp } from "@/config/firestore";
import { useAuthStore } from "@/stores/AuthStore";

export default {
	setup() {
		// Data
		const chat_channel = ref("dev-channel");
		const authStore = useAuthStore();
		const user = authStore.currentUser();
		const { addDocs, error: addError } = useCollection(chat_channel.value);
		const { documents, error: fetchError } = getCollection(chat_channel.value);

		const message = ref("");
		const submitError = ref("");

		const formattedDocuments = computed(() => {
			return documents.value?.map((doc) => {
				let time = formatDistanceToNow(doc.createdAt.toDate());
				return { ...doc, createdAt: time };
			});
		});

		const handleMessageSubmit = async () => {
			console.log(user);
			const chat = {
				chat_channel: chat_channel.value,
				user_id: user.id,
				user_name: user.first_name + " " + user.last_name,
				message: message.value,
				createdAt: timestamp(),
			};

			await addDocs(chat);
			if (!addError.value) {
				message.value = "";
			} else {
				submitError.value = addError.value;
			}
		};

		const messagesContainer = ref(null);

		onUpdated(() => {
			if (messagesContainer.value) {
				messagesContainer.value.scrollTop =
					messagesContainer.value.scrollHeight;
			}
		});

		return {
			message,
			handleMessageSubmit,
			submitError,
			documents,
			formattedDocuments,
			messagesContainer,
		};
	},
};
</script>

<style scoped>
.badge.bg-primary.p-2 {
	word-wrap: break-word;
	overflow-wrap: break-word;
	white-space: normal;
	text-align: justify;
	font-weight: normal;
}
</style>
