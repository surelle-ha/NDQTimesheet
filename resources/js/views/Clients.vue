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
                            <h4 class="card-title">Client Management</h4>
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
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Description</th>
                                        <th>Sectory</th>
                                        <th>Phone</th>
                                        <th>Address 1</th>
                                        <th>Address 2</th>
                                        <th>Region</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="client in allClients"
                                        :key="client.id"
                                    >
                                        <td>{{ client.client_id }}</td>
                                        <td>{{ client.client_name }}</td>
                                        <td>{{ client.client_description }}</td>
                                        <td>{{ client.client_sector }}</td>
                                        <td>{{ client.client_phone }}</td>
                                        <td>{{ client.client_address_1 }}</td>
                                        <td>{{ client.client_address_2 }}</td>
                                        <td>{{ client.client_region }}</td>
                                        <td>{{ client.client_country }}</td>
                                        <td>{{ client.client_status }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Description</th>
                                        <th>Sectory</th>
                                        <th>Phone</th>
                                        <th>Address 1</th>
                                        <th>Address 2</th>
                                        <th>Region</th>
                                        <th>Country</th>
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
import { useRouter } from "vue-router";
import { useAuthStore } from "@/stores/AuthStore";
import { useClientStore } from "@/stores/ClientStore";

export default {
    components: {},
    setup() {
        const error = ref(null);
        const allClients = ref([]);
        const dataTable = ref(null);
        const authStore = useAuthStore();
        const clientStore = useClientStore();
        const router = useRouter();

        const getAllClientsHandler = async () => {
            console.log("user table refresh");
            const res = await clientStore.loadClients(authStore.getToken());
            if (res) {
                console.log(clientStore.clients);
                allClients.value = clientStore.clients;
                updateDataTable();
            } else {
                authStore.destroyUser();
                router.push({ name: "Login" });
            }
        };

        const updateDataTable = () => {
            if (dataTable.value) {
                dataTable.value.clear().rows.add(allClients.value).draw();
            }
        };

        onMounted(async () => {
            await getAllClientsHandler();
            if ($.fn.DataTable) {
                dataTable.value = $("#datatable").DataTable();
            }
        });

        watch(
            allClients,
            () => {
                updateDataTable();
            },
            { deep: true }
        );

        return { allClients, error };
    },
};
</script>

<style></style>
