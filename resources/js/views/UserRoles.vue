<template>
    <DeleteUserModal :user="selectedUser" />

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
                            <h4 class="card-title">User Role Manager</h4>
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
                                        <th>Role Title</th>
                                        <th>Description</th>
                                        <th>Last Update</th>
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="role in allRoles" :key="role.id">
                                        <td>{{ role.id }}</td>
                                        <td>{{ role.user_role_title }}</td>
                                        <td>
                                            {{ role.user_role_description }}
                                        </td>
                                        <td>
                                            {{ role.updated_at }}
                                        </td>
                                        <td>
                                            {{ role.created_at }}
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Role Title</th>
                                        <th>Description</th>
                                        <th>Last Update</th>
                                        <th>Created</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted, ref, watch } from "vue";
import { useRouter } from "vue-router";
import { useAuthStore } from "@/stores/AuthStore";
import { useUserStore } from "@/stores/UserStore";
import DeleteUserModal from "@/components/widgets/Modals/DeleteUserModal.vue";

export default {
    components: { DeleteUserModal },
    setup() {
        const error = ref(null);
        const selectedUser = ref(null);
        const allRoles = ref([]);
        const dataTable = ref(null);
        const authStore = useAuthStore();
        const userStore = useUserStore();
        const router = useRouter();

        const getallRolesHandler = async () => {
            console.log("user table refresh");
            const res = await userStore.loadUserRoles(authStore.getToken());
            if (res) {
                console.log(userStore.roles);
                allRoles.value = userStore.roles;
                updateDataTable();
            } else {
                authStore.destroyUser();
                router.push({ name: "Login" });
            }
        };

        const updateDataTable = () => {
            if (dataTable.value) {
                dataTable.value.clear().rows.add(allRoles.value).draw();
            }
        };

        const selectUserDeletion = (id) => {
            selectedUser.value = id;
        };

        onMounted(async () => {
            await getallRolesHandler();
            if ($.fn.DataTable) {
                dataTable.value = $("#datatable").DataTable();
            }
        });

        watch(
            allRoles,
            () => {
                updateDataTable();
            },
            { deep: true }
        );

        return {
            allRoles,
            selectUserDeletion,
            selectedUser,
            error,
        };
    },
};
</script>

<style></style>
