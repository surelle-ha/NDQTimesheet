<template>
	<div class="container-fluid content-inner mt-n5 py-0">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header d-flex justify-content-between">
						<div class="header-title">
							<h4 class="card-title">Developer Logs</h4>
						</div>
					</div>
					<div class="card-body">
						<p>Total Number of Logs: {{ allLogs.length }}</p>
						<div class="table-responsive">
							<table
								id="datatable"
								class="table table-striped"
								data-toggle="data-table"
							>
								<thead>
									<tr>
										<th>Date</th>
										<th>Message</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="log in allLogs" :key="log.id">
										<td>
											{{ formatDate(log.date) }}
										</td>
										<td>{{ log.text }}</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Date</th>
										<th>Message</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="btn-download">
		<a class="btn btn-primary px-3 py-2"> Export Logs /Todo/ </a>
	</div>
</template>

<script>
import { onMounted, ref, watch } from "vue";
import getDeveloperLogs from "@/composables/getDeveloperLogs";

export default {
	components: {},
	setup() {
		const allLogs = ref([]);
		const dataTable = ref(null);
		const { logs, error } = getDeveloperLogs();

		const formatDate = (dateStr) => {
			let date = new Date(dateStr);
			let year = date.getFullYear().toString().substr(-2); // Get last 2 digits of year
			let month = (date.getMonth() + 1).toString().padStart(2, "0"); // Add 1 because months are 0-indexed
			let day = date.getDate().toString().padStart(2, "0");

			// Convert to 12-hour format
			let hours = date.getHours();
			let ampm = hours >= 12 ? "PM" : "AM";
			hours = hours % 12;
			hours = hours ? hours : 12; // the hour '0' should be '12'
			hours = hours.toString().padStart(2, "0");

			let minutes = date.getMinutes().toString().padStart(2, "0");
			let seconds = date.getSeconds().toString().padStart(2, "0");

			return `${year}-${month}-${day} ${hours}:${minutes}:${seconds} ${ampm}`;
		};

		const getAllLogsHandler = async () => {
			const res = await logs();
			if (res && res.response) {
				allLogs.value = res.response
					.filter((log) => Date.parse(log.date)) // Keep only logs with valid dates
					.sort((a, b) => new Date(b.date) - new Date(a.date));
				updateDataTable();
			}
		};

		const updateDataTable = () => {
			if (dataTable.value) {
				dataTable.value.clear().rows.add(allLogs.value).draw();
			}
		};

		onMounted(async () => {
			await getAllLogsHandler();

			// Initialize DataTable with sorting
			if ($.fn.DataTable) {
				dataTable.value = $("#datatable").DataTable({
					order: [[0, "desc"]], // Sort by the first column (date) in descending order
				});
			}
		});

		watch(
			allLogs,
			() => {
				updateDataTable();
			},
			{ deep: true }
		);

		return { allLogs, error, formatDate };
	},
};
</script>

<style></style>
