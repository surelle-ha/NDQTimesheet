<template>
	<div class="container-fluid content-inner mt-n5 py-0">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header d-flex justify-content-between">
						<div class="header-title">
							<h4 class="card-title">API Settings</h4>
						</div>
					</div>
					<div class="card-body">
						<p>Manage Settings to access Backend API Endpoint.</p>
						<form @submit.prevent="console.log('test')">
							<div class="form-group">
								<div class="row">
									<div class="col">
										<label class="form-label" for="exampleInputDisabled1"
											>Backend API URL</label
										>
										<input
											type="text"
											class="form-control"
											v-model="localUrl"
										/>
									</div>
									<div class="col">
										<label class="form-label" for="exampleInputDisabled1"
											>Port</label
										>
										<input type="text" class="form-control" v-model="port" />
									</div>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">
									Check Connection
								</button>
							</div>
						</form>
						<div class="card-body">
							<p>
								Below are the API endpoint that will be utilised by the system.
								Make sure that endpoint is correct. If you get an error, please
								check the
								<router-link :to="{ name: 'DeveloperLogs' }">logs</router-link>
								in the Developer section.
							</p>
							<form
								class="form-horizontal"
								@submit.prevent="console.log('test')"
							>
								<div class="form-group row">
									<label
										class="control-label col-sm-3 align-self-center mb-0"
										for="email"
										>Authentication Login:</label
									>
									<div class="col-sm-9">
										<input
											type="email"
											class="form-control"
											id="email"
											placeholder="Enter Your  email"
										/>
									</div>
								</div>
								<div class="form-group row">
									<label
										class="control-label col-sm-3 align-self-center mb-0"
										for="pwd1"
										>Authentication Register:</label
									>
									<div class="col-sm-9">
										<input
											type="password"
											class="form-control"
											id="pwd1"
											placeholder="Enter Your password"
										/>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { ref } from "vue";
export default {
	setup() {
		const localUrl = ref("http://localhost");
		const port = ref(8000);

		return { localUrl, port };
	},
};
</script>

<style></style>
