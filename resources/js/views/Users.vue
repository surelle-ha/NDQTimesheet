<template>
    <Dialog
        v-model:visible="visible"
        modal
        :pt="{
            root: 'border-none',
            mask: {
                style: 'backdrop-filter: blur(2px)',
            },
        }"
        header="Header"
        :style="{ width: '50rem' }"
        :breakpoints="{ '1199px': '75vw', '575px': '90vw' }"
    >
        <template #header>
            <div
                class="inline-flex align-items-center justify-content-center gap-2"
            >
                <span class="font-bold white-space-nowrap">Add User</span>
            </div>
        </template>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label
                                    class="form-label"
                                    for="validationDefault01"
                                    >First name</label
                                >
                                <InputText
                                    type="text"
                                    class="form-control"
                                    id="validationDefault01"
                                    required=""
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label
                                    class="form-label"
                                    for="validationDefault02"
                                    >Last name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationDefault02"
                                    required=""
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label
                                    for="validationCustomUsername"
                                    class="form-label"
                                    >Username</label
                                >
                                <div class="form-group input-group">
                                    <span
                                        class="input-group-text"
                                        id="basic-addon1"
                                        >@</span
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="validationCustomUsername"
                                        aria-label="Username"
                                        aria-describedby="basic-addon1"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label
                                    class="form-label"
                                    for="validationDefault03"
                                    >City</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationDefault03"
                                    required=""
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label
                                    class="form-label"
                                    for="validationDefault04"
                                    >State</label
                                >
                                <select
                                    class="form-select"
                                    id="validationDefault04"
                                    required=""
                                >
                                    <option selected="" disabled="" value="">
                                        Choose...
                                    </option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label
                                    class="form-label"
                                    for="validationDefault05"
                                    >Zip</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationDefault05"
                                    required=""
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="invalidCheck2"
                                    required=""
                                />
                                <label
                                    class="form-check-label"
                                    for="invalidCheck2"
                                >
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                Submit form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <template #footer>
            <Button
                label="Cancel"
                text
                severity="secondary"
                @click="visible = false"
                autofocus
            />
            <Button
                label="Save"
                outlined
                severity="secondary"
                @click="visible = false"
                autofocus
            />
        </template>
    </Dialog>

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
                            <h4 class="card-title">User Management</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid justify-content-start">
                            <button
                                class="btn btn-sm btn-primary rounded-pill mx-2"
                                label="Show"
                                @click="visible = true"
                            >
                                <span class="btn-inner">
                                    <svg
                                        class="icon-32"
                                        width="32"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M9.5 12.5537C12.2546 12.5537 14.4626 10.3171 14.4626 7.52684C14.4626 4.73663 12.2546 2.5 9.5 2.5C6.74543 2.5 4.53737 4.73663 4.53737 7.52684C4.53737 10.3171 6.74543 12.5537 9.5 12.5537ZM9.5 15.0152C5.45422 15.0152 2 15.6621 2 18.2464C2 20.8298 5.4332 21.5 9.5 21.5C13.5448 21.5 17 20.8531 17 18.2687C17 15.6844 13.5668 15.0152 9.5 15.0152ZM19.8979 9.58786H21.101C21.5962 9.58786 22 9.99731 22 10.4995C22 11.0016 21.5962 11.4111 21.101 11.4111H19.8979V12.5884C19.8979 13.0906 19.4952 13.5 18.999 13.5C18.5038 13.5 18.1 13.0906 18.1 12.5884V11.4111H16.899C16.4027 11.4111 16 11.0016 16 10.4995C16 9.99731 16.4027 9.58786 16.899 9.58786H18.1V8.41162C18.1 7.90945 18.5038 7.5 18.999 7.5C19.4952 7.5 19.8979 7.90945 19.8979 8.41162V9.58786Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </span>
                                Add User
                            </button>

                            <button
                                class="btn btn-sm btn-primary rounded-pill"
                                @click="exportToExcel"
                            >
                                <span class="btn-inner">
                                    <svg
                                        class="icon-32"
                                        width="32"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M7.81 2H16.191C19.28 2 21 3.78 21 6.83V17.16C21 20.26 19.28 22 16.191 22H7.81C4.77 22 3 20.26 3 17.16V6.83C3 3.78 4.77 2 7.81 2ZM8.08 6.66V6.65H11.069C11.5 6.65 11.85 7 11.85 7.429C11.85 7.87 11.5 8.22 11.069 8.22H8.08C7.649 8.22 7.3 7.87 7.3 7.44C7.3 7.01 7.649 6.66 8.08 6.66ZM8.08 12.74H15.92C16.35 12.74 16.7 12.39 16.7 11.96C16.7 11.53 16.35 11.179 15.92 11.179H8.08C7.649 11.179 7.3 11.53 7.3 11.96C7.3 12.39 7.649 12.74 8.08 12.74ZM8.08 17.31H15.92C16.319 17.27 16.62 16.929 16.62 16.53C16.62 16.12 16.319 15.78 15.92 15.74H8.08C7.78 15.71 7.49 15.85 7.33 16.11C7.17 16.36 7.17 16.69 7.33 16.95C7.49 17.2 7.78 17.35 8.08 17.31Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </span>
                                Export
                            </button>
                        </div>
                        <p></p>
                        <div class="table-responsive">
                            <table
                                id="datatable"
                                class="table table-striped"
                                data-toggle="data-table"
                            >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Internal ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Position</th>
                                        <th>Gender</th>
                                        <th>Country</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="user in allUsers" :key="user.id">
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.internal_id }}</td>
                                        <td>
                                            {{
                                                user.first_name +
                                                " " +
                                                user.last_name
                                            }}
                                        </td>
                                        <td>{{ user.role }}</td>
                                        <td>{{ user.position }}</td>
                                        <td>{{ user.gender }}</td>
                                        <td>{{ user.country }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            <span
                                                class="badge w-100 py-2"
                                                :class="{
                                                    'bg-primary':
                                                        user.status.toUpperCase() ==
                                                        'ACTIVE',
                                                    'bg-warning':
                                                        user.status.toUpperCase() ==
                                                        'INACTIVE',
                                                }"
                                                >{{
                                                    user.status.toUpperCase()
                                                }}</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="flex align-items-center list-user-action"
                                            >
                                                <a
                                                    class="btn btn-sm btn-icon btn-warning"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Edit"
                                                    data-original-title="Edit"
                                                    href="#"
                                                >
                                                    <span class="btn-inner">
                                                        <svg
                                                            class="icon-20"
                                                            width="20"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                            <path
                                                                fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                            <path
                                                                d="M15.1655 4.60254L19.7315 9.16854"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                                &nbsp;
                                                <a
                                                    class="btn btn-sm btn-icon btn-danger"
                                                    @click="
                                                        selectUserDeletion(
                                                            user.id
                                                        )
                                                    "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop"
                                                    title="Delete"
                                                >
                                                    <span class="btn-inner">
                                                        <svg
                                                            class="icon-20"
                                                            width="20"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            stroke="currentColor"
                                                        >
                                                            <path
                                                                d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                            <path
                                                                d="M20.708 6.23975H3.75"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                            <path
                                                                d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
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
                                        <th>Country</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
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

import { useToast } from "vue-toast-notification";
import "vue-toast-notification/dist/theme-sugar.css";

import Dialog from "primevue/dialog";
import Button from "primevue/button";
import InputText from "primevue/inputtext";
import Avatar from "primevue/avatar";
import FloatLabel from "primevue/floatlabel";

import * as XLSX from "xlsx";

import { useAuthStore } from "@/stores/AuthStore";
import { useUserStore } from "@/stores/UserStore";

export default {
    components: { Button, Dialog, InputText, Avatar, FloatLabel },
    setup() {
        const visible = ref(false);
        const error = ref(null);
        const selectedUser = ref(null);
        const allUsers = ref([]);
        const dataTable = ref(null);
        const authStore = useAuthStore();
        const userStore = useUserStore();
        const router = useRouter();
        const $toast = useToast();

        const test = () => {
            $toast.success("test");
        };

        const exportToExcel = () => {
            // Assuming allUsers.value is your complete dataset
            const ws = XLSX.utils.json_to_sheet(allUsers.value);
            const wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Users");
            XLSX.writeFile(wb, "users_data.xlsx");
        };

        const getAllUsersHandler = async () => {
            console.log("user table refresh");
            const res = await userStore.loadUsers(authStore.getToken());
            if (res) {
                $toast.success("Data Loaded");
                console.log(userStore.users);
                allUsers.value = userStore.users;
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
                dataTable.value.clear().rows.add(allUsers.value).draw();
            }
        };

        const selectUserDeletion = (id) => {
            selectedUser.value = id;
        };

        onMounted(async () => {
            await getAllUsersHandler();
            if ($.fn.DataTable) {
                dataTable.value = $("#datatable").DataTable();
            }
        });

        watch(
            allUsers,
            () => {
                updateDataTable();
            },
            { deep: true }
        );

        return {
            visible,
            exportToExcel,
            allUsers,
            selectUserDeletion,
            selectedUser,
            error,
            test,
        };
    },
};
</script>

<style></style>
