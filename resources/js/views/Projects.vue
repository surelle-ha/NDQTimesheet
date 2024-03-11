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
                            <h4 class="card-title">Project Management</h4>
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
                                        <th>Client ID</th>
                                        <th>Project ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="project in allProjects"
                                        :key="project.id"
                                    >
                                        <td>{{ project.id }}</td>
                                        <td>{{ project.client_id }}</td>
                                        <td>{{ project.project_id }}</td>
                                        <td>{{ project.project_name }}</td>
                                        <td>
                                            {{ project.project_description }}
                                        </td>
                                        <td>{{ project.project_status }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Internal ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Position</th>
                                        <th>Gender</th>
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

import { useToast } from "vue-toast-notification";
import "vue-toast-notification/dist/theme-sugar.css";

import { useAuthStore } from "@/stores/AuthStore";
import { useProjectStore } from "@/stores/ProjectStore";

export default {
    components: {},
    setup() {
        const error = ref(null);
        const allProjects = ref([]);
        const dataTable = ref(null);
        const authStore = useAuthStore();
        const projectStore = useProjectStore();
        const router = useRouter();
        const $toast = useToast();

        const getAllProjectsHandler = async () => {
            console.log("user table refresh");
            const res = await projectStore.loadProjects(authStore.getToken());
            if (res) {
                $toast.success("Data Loaded");
                console.log(projectStore.projects);
                allProjects.value = projectStore.projects;
                updateDataTable();
            } else {
                $toast.open({
                    message: "Something went wrong!",
                    type: "error",
                });
                authStore.destroyUser();
                router.push({ name: "Login" });
            }
        };

        const updateDataTable = () => {
            if (dataTable.value) {
                dataTable.value.clear().rows.add(allProjects.value).draw();
            }
        };

        onMounted(async () => {
            await getAllProjectsHandler();
            if ($.fn.DataTable) {
                dataTable.value = $("#datatable").DataTable();
            }
        });

        watch(
            allProjects,
            () => {
                updateDataTable();
            },
            { deep: true }
        );

        return { allProjects, error };
    },
};
</script>

<style></style>
