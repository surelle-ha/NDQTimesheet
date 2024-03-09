<template>
	<div class="container-fluid content-inner mt-n5 py-0">
		<div class="row">
			<div class="col-sm-12">
				<div
					class="card swiper-slide card card-slide"
					data-aos="fade-up"
					data-aos-delay="300"
				>
					<div class="card-header d-flex justify-content-between">
						<div class="header-title">
							<h4 class="card-title">Group Management</h4>
						</div>
					</div>
					<div class="card-body">
						<p>##</p>
						<div class="table-responsive">
							<table
								id="datatable"
								class="table table-striped"
								data-toggle="data-table"
							>
								<thead>
									<tr>
										<th>ID</th>
										<th>Project ID</th>
										<th>Group ID</th>
										<th>Name</th>
										<th>Description</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="group in allGroups" :key="group.id">
										<td>{{ group.id }}</td>
										<td>{{ group.project_id }}</td>
										<td>{{ group.group_id }}</td>
										<td>{{ group.group_name }}</td>
										<td>{{ group.group_description }}</td>
										<td>{{ group.group_status }}</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>ID</th>
										<th>Project ID</th>
										<th>Group ID</th>
										<th>Name</th>
										<th>Description</th>
										<th>Status</th>
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
		<a class="btn btn-success px-3 py-2"> Add User </a>
	</div>
</template>

<script>
import { onMounted, ref, watch } from "vue";
import { useAuthStore } from "@/stores/AuthStore";
import { useGroupStore } from "@/stores/GroupStore";

export default {
	components: {},
	setup() {
		const error = ref(null);
		const allGroups = ref([]);
		const dataTable = ref(null);
		const authStore = useAuthStore();
		const groupStore = useGroupStore();

		const getAllGroupsHandler = async () => {
			console.log("user table refresh");
			const res = await groupStore.loadGroups(authStore.getToken());
			if (res) {
				console.log(groupStore.groups);
				allGroups.value = groupStore.groups;
				updateDataTable();
			}
		};

		const updateDataTable = () => {
			if (dataTable.value) {
				dataTable.value.clear().rows.add(allGroups.value).draw();
			}
		};

		onMounted(async () => {
			await getAllGroupsHandler();
			if ($.fn.DataTable) {
				dataTable.value = $("#datatable").DataTable();
			}
		});

		watch(
			allGroups,
			() => {
				updateDataTable();
			},
			{ deep: true }
		);

		return { allGroups, error };
	},
};
</script>

<style></style>
