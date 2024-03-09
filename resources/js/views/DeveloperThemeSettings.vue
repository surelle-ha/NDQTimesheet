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
						<div class="row">
							<div class="col-lg-12">
								<h5 class="mb-3">Scheme</h5>
								<div class="d-grid gap-3 grid-cols-3 mb-4">
									<div
										class="btn btn-border"
										data-setting="color-mode"
										data-name="color"
										data-value="auto"
									>
										<svg
											class="icon-20"
											width="20"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill="currentColor"
												d="M7,2V13H10V22L17,10H13L17,2H7Z"
											/>
										</svg>
										<span class="ms-2"> Auto </span>
									</div>

									<div
										class="btn btn-border"
										data-setting="color-mode"
										data-name="color"
										data-value="dark"
									>
										<svg
											class="icon-20"
											width="20"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill="currentColor"
												d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z"
											/>
										</svg>
										<span class="ms-2"> Dark </span>
									</div>
									<div
										class="btn btn-border active"
										data-setting="color-mode"
										data-name="color"
										data-value="light"
									>
										<svg
											class="icon-20"
											width="20"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill="currentColor"
												d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z"
											/>
										</svg>
										<span class="ms-2"> Light</span>
									</div>
								</div>
								<hr class="hr-horizontal" />
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="mt-4 mb-3">Color Customizer</h5>
									<button
										class="btn btn-transparent p-0 border-0"
										data-value="theme-color-default"
										data-info="#079aa2"
										data-setting="color-mode1"
										data-name="color"
										data-bs-toggle="tooltip"
										data-bs-placement="top"
										title=""
										data-bs-original-title="Default"
									>
										<svg
											class="icon-18"
											width="18"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
												fill="#31BAF1"
											/>
											<path
												d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
												fill="#0169CA"
											/>
										</svg>
									</button>
								</div>
								<div class="grid-cols-5 mb-4 d-grid gap-x-2">
									<div
										class="btn btn-border bg-transparent"
										data-value="theme-color-blue"
										data-info="#573BFF"
										data-setting="color-mode1"
										data-name="color"
										data-bs-toggle="tooltip"
										data-bs-placement="top"
										title=""
										data-bs-original-title="Theme-1"
									>
										<svg
											class="customizer-btn icon-32"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 24 24"
											width="32"
										>
											<circle cx="12" cy="12" r="10" fill="#00C3F9" />
											<path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" />
										</svg>
									</div>
									<div
										class="btn btn-border bg-transparent"
										data-value="theme-color-gray"
										data-info="#FD8D00"
										data-setting="color-mode1"
										data-name="color"
										data-bs-toggle="tooltip"
										data-bs-placement="top"
										title=""
										data-bs-original-title="Theme-2"
									>
										<svg
											class="customizer-btn icon-32"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 24 24"
											width="32"
										>
											<circle cx="12" cy="12" r="10" fill="#91969E" />
											<path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" />
										</svg>
									</div>
									<div
										class="btn btn-border bg-transparent"
										data-value="theme-color-red"
										data-info="#366AF0"
										data-setting="color-mode1"
										data-name="color"
										data-bs-toggle="tooltip"
										data-bs-placement="top"
										title=""
										data-bs-original-title="Theme-3"
									>
										<svg
											class="customizer-btn icon-32"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 24 24"
											width="32"
										>
											<circle cx="12" cy="12" r="10" fill="#DB5363" />
											<path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" />
										</svg>
									</div>
									<div
										class="btn btn-border bg-transparent"
										data-value="theme-color-yellow"
										data-info="#6410F1"
										data-setting="color-mode1"
										data-name="color"
										data-bs-toggle="tooltip"
										data-bs-placement="top"
										title=""
										data-bs-original-title="Theme-4"
									>
										<svg
											class="customizer-btn icon-32"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 24 24"
											width="32"
										>
											<circle cx="12" cy="12" r="10" fill="#EA6A12" />
											<path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" />
										</svg>
									</div>
									<div
										class="btn btn-border bg-transparent"
										data-value="theme-color-pink"
										data-info="#25C799"
										data-setting="color-mode1"
										data-name="color"
										data-bs-toggle="tooltip"
										data-bs-placement="top"
										title=""
										data-bs-original-title="Theme-5"
									>
										<svg
											class="customizer-btn icon-32"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 24 24"
											width="32"
										>
											<circle cx="12" cy="12" r="10" fill="#E586B3" />
											<path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" />
										</svg>
									</div>
								</div>
								<hr class="hr-horizontal" />
								<h5 class="mb-3 mt-4">Scheme Direction</h5>
								<div class="d-grid gap-3 grid-cols-2 mb-4">
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/01.png"
											alt="ltr"
											class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2"
											data-setting="dir-mode"
											data-name="dir"
											data-value="ltr"
										/>
										<img
											src="@/assets/images/settings/light/01.png"
											alt="ltr"
											class="mode light-img img-fluid btn-border p-0 flex-column active mb-2"
											data-setting="dir-mode"
											data-name="dir"
											data-value="ltr"
										/>
										<span class="mt-2"> LTR </span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/02.png"
											alt=""
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="dir-mode"
											data-name="dir"
											data-value="rtl"
										/>
										<img
											src="@/assets/images/settings/light/02.png"
											alt=""
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="dir-mode"
											data-name="dir"
											data-value="rtl"
										/>
										<span class="mt-2"> RTL </span>
									</div>
								</div>
								<hr class="hr-horizontal" />
								<h5 class="mt-4 mb-3">Sidebar Color</h5>
								<div class="d-grid gap-3 grid-cols-2 mb-4">
									<div
										class="btn btn-border d-block"
										data-setting="sidebar"
										data-name="sidebar-color"
										data-value="sidebar-white"
									>
										<span class=""> Default </span>
									</div>
									<div
										class="btn btn-border d-block"
										data-setting="sidebar"
										data-name="sidebar-color"
										data-value="sidebar-dark"
									>
										<span class=""> Dark </span>
									</div>
									<div
										class="btn btn-border d-block"
										data-setting="sidebar"
										data-name="sidebar-color"
										data-value="sidebar-color"
									>
										<span class=""> Color </span>
									</div>

									<div
										class="btn btn-border d-block"
										data-setting="sidebar"
										data-name="sidebar-color"
										data-value="sidebar-transparent"
									>
										<span class=""> Transparent </span>
									</div>
								</div>
								<hr class="hr-horizontal" />
								<h5 class="mt-4 mb-3">Sidebar Types</h5>
								<div class="d-grid gap-3 grid-cols-3 mb-4">
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/03.png"
											alt="mini"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-type"
											data-value="sidebar-mini"
										/>
										<img
											src="@/assets/images/settings/light/03.png"
											alt="mini"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-type"
											data-value="sidebar-mini"
										/>
										<span class="mt-2">Mini</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/04.png"
											alt="hover"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-type"
											data-value="sidebar-hover"
											data-extra-value="sidebar-mini"
										/>
										<img
											src="@/assets/images/settings/light/04.png"
											alt="hover"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-type"
											data-value="sidebar-hover"
											data-extra-value="sidebar-mini"
										/>
										<span class="mt-2">Hover</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/05.png"
											alt="boxed"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-type"
											data-value="sidebar-boxed"
										/>
										<img
											src="@/assets/images/settings/light/05.png"
											alt="boxed"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-type"
											data-value="sidebar-boxed"
										/>
										<span class="mt-2">Boxed</span>
									</div>
								</div>
								<hr class="hr-horizontal" />
								<h5 class="mt-4 mb-3">Sidebar Active Style</h5>
								<div class="d-grid gap-3 grid-cols-2 mb-4">
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/06.png"
											alt="rounded-one-side"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-rounded"
										/>
										<img
											src="@/assets/images/settings/light/06.png"
											alt="rounded-one-side"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-rounded"
										/>
										<span class="mt-2">Rounded One Side</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/07.png"
											alt="rounded-all"
											class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-rounded-all"
										/>
										<img
											src="@/assets/images/settings/light/07.png"
											alt="rounded-all"
											class="mode light-img img-fluid btn-border p-0 flex-column active mb-2"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-rounded-all"
										/>
										<span class="mt-2">Rounded All</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/08.png"
											alt="pill-one-side"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-pill"
										/>
										<img
											src="@/assets/images/settings/light/09.png"
											alt="pill-one-side"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-pill"
										/>
										<span class="mt-2">Pill One Side</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/09.png"
											alt="pill-all"
											class="mode dark-img img-fluid btn-border p-0 flex-column"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-pill-all"
										/>
										<img
											src="@/assets/images/settings/light/08.png"
											alt="pill-all"
											class="mode light-img img-fluid btn-border p-0 flex-column"
											data-setting="sidebar"
											data-name="sidebar-item"
											data-value="navs-pill-all"
										/>
										<span class="mt-2">Pill All</span>
									</div>
								</div>
								<hr class="hr-horizontal" />
								<h5 class="mt-4 mb-3">Navbar Style</h5>
								<div class="d-grid gap-3 grid-cols-2">
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/11.png"
											alt="image"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar"
											data-name="navbar-type"
											data-value="nav-glass"
										/>
										<img
											src="@/assets/images/settings/light/10.png"
											alt="image"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar"
											data-name="navbar-type"
											data-value="nav-glass"
										/>
										<span class="mt-2">Glass</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/10.png"
											alt="color"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar-header"
											data-name="navbar-type"
											data-value="navs-bg-color"
										/>
										<img
											src="@/assets/images/settings/light/11.png"
											alt="color"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar-header"
											data-name="navbar-type"
											data-value="navs-bg-color"
										/>
										<span class="mt-2">Color</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/12.png"
											alt="sticky"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar"
											data-name="navbar-type"
											data-value="navs-sticky"
										/>
										<img
											src="@/assets/images/settings/light/12.png"
											alt="sticky"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar"
											data-name="navbar-type"
											data-value="navs-sticky"
										/>
										<span class="mt-2">Sticky</span>
									</div>
									<div class="text-center">
										<img
											src="@/assets/images/settings/dark/13.png"
											alt="transparent"
											class="mode dark-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar"
											data-name="navbar-type"
											data-value="navs-transparent"
										/>
										<img
											src="@/assets/images/settings/light/13.png"
											alt="transparent"
											class="mode light-img img-fluid btn-border p-0 flex-column mb-2"
											data-setting="navbar"
											data-target=".iq-navbar"
											data-name="navbar-type"
											data-value="navs-transparent"
										/>
										<span class="mt-2">Transparent</span>
									</div>
									<div
										class="btn btn-border active col-span-full mt-4 d-block"
										data-setting="navbar"
										data-name="navbar-default"
										data-value="default"
									>
										<span class=""> Default Navbar</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { onMounted } from "vue";

export default {
	setup() {
		onMounted(() => {
			// Ensure jQuery is loaded and available
			if (typeof jQuery === "undefined") {
				console.error("jQuery is not loaded");
				return;
			}

			(function () {
				"use strict";

				// Variables
				let sidebarTypeSetting = [];

				//  RTL mode on change offcanvas position change function
				const rtlModeDefault = (check) => {
					if (check) {
						$(".offcanvas-start")
							.addClass("on-rtl start")
							.removeClass("offcanvas-start");
						$(".offcanvas-end")
							.addClass("on-rtl end")
							.removeClass("offcanvas-end");
						$(".on-rtl.start").addClass("offcanvas-end").removeClass("start");
						$(".on-rtl.end").addClass("offcanvas-start").removeClass("end");
					} else {
						$(".offcanvas-start")
							.addClass("on-rtl start")
							.removeClass("offcanvas-start");
						$(".offcanvas-end")
							.addClass("on-rtl end")
							.removeClass("offcanvas-end");
						$(".on-rtl.start").addClass("offcanvas-end").removeClass("start");
						$(".on-rtl.end").addClass("offcanvas-start").removeClass("end");
					}
				};

				// On Page Load Active Function
				const checkSettingMenu = (type, name, value, data) => {
					if (data == "addedClass") {
						document
							.querySelectorAll(
								`[data-setting="${type}"][data-name="${name}"].active`
							)
							.forEach((el) => {
								el.classList.remove("active");
							});
					}
					if (data == "noClass") {
						const dataREmove = `[data-setting="${type}"][data-name="${name}"]`;
						const dataAdd = `[data-setting="${type}"][data-name="${name}"][data-value="${value}"]`;

						document.querySelectorAll(dataREmove).forEach((el) => {
							el.classList.remove("active");
						});
						document.querySelectorAll(dataAdd).forEach((el) => {
							el.classList.add("active");
						});
					}
				};

				// Dark mode enable & disabled function
				const darkMode = () => {
					if (document.querySelector("body").classList.contains("auto")) {
						if (
							window.matchMedia &&
							window.matchMedia("(prefers-color-scheme: dark)").matches
						) {
							document.querySelector("body").classList.add("dark");
						} else {
							document.querySelector("body").classList.remove("dark");
						}
					}
				};

				// For Dark, RTL & Sidebar Class Update
				const changeMode = (type, value, target) => {
					let detailObj = {};
					if (type == "color-mode") {
						detailObj = { dark: value };
						document.querySelector("body").classList.add(value);
					}
					if (type == "dir-mode") {
						detailObj = { dir: value };
						document.querySelector("html").setAttribute("dir", value);
					}
					if (type == "sidebar") {
						detailObj = { "sidebar-color": value };
						const sidebarclass = document.querySelector(".sidebar-default");
						if (sidebarclass !== null && sidebarclass !== undefined) {
							sidebarclass.classList.add(value);
						}
					}
					const event = new CustomEvent("ChangeMode", { detail: detailObj });
					document.dispatchEvent(event);
				};

				// Page on load function
				const updateMode = () => {
					// Change Mode Custom Event Listners
					document.addEventListener("ChangeMode", (e) => {
						if (e.detail.dir === "rtl" || e.detail.dir === "ltr") {
							rtlModeDefault(true);
						}
						if (e.detail.dark !== null || e.detail.dark !== undefined) {
							darkMode();
						}
					});

					// For Dark Mode
					const colorMode = sessionStorage.getItem("color-mode");
					if (colorMode !== null && colorMode !== undefined) {
						document.body.classList.remove("dark");
						document.body.classList.add(colorMode);
						darkMode();
						checkSettingMenu("color-mode", "color", colorMode, "addedClass");
					}

					// For RTL Mode
					const dirMode = sessionStorage.getItem("dir-mode");
					if (dirMode !== null && dirMode !== undefined && dirMode !== "ltr") {
						checkSettingMenu("dir-mode", "dir", dirMode, "addedClass");
						changeMode("dir-mode", dirMode);
					}

					// For Sidebar Color
					const sidebarColors = sessionStorage.getItem("sidebar");
					if (sidebarColors !== null && sidebarColors !== undefined) {
						checkSettingMenu(
							"sidebar",
							"sidebar-color",
							sidebarColors,
							"addedClass"
						);
						changeMode("sidebar", sidebarColors);
					}

					// For Sidebar Types
					const sidebarTypeSession = sessionStorage.getItem("sidebarType");
					if (sidebarTypeSession !== null && sidebarTypeSession !== undefined) {
						sidebarTypeSetting = JSON.parse(sidebarTypeSession);
						Array.from(sidebarTypeSetting, (type) => {
							document
								.querySelectorAll(
									`[data-setting="sidebar"][data-name="sidebar-type"][data-value="${type}"]`
								)
								.forEach((el) => {
									el.classList.add("active");
								});
							changeMode("sidebar", type);
						});
					}

					// For Sidebar Active Style
					const allActiveType = sessionStorage.getItem("sidebar-style");
					if (allActiveType !== null && allActiveType !== undefined) {
						document
							.querySelector(".sidebar")
							.classList.remove("navs-rounded-all");
						document
							.querySelector(".sidebar")
							.classList.add(`${allActiveType}`);
						checkSettingMenu(
							"sidebar",
							"sidebar-item",
							allActiveType,
							"addedClass"
						);
						changeMode("sidebar-style", allActiveType);
					}

					// For Navbar & Header Style
					const allNavbarType = sessionStorage.getItem("navbarTypes");
					if (allNavbarType !== null && allNavbarType !== undefined) {
						if (
							allNavbarType == "nav-glass" ||
							allNavbarType == "navs-sticky" ||
							allNavbarType == "navs-transparent"
						) {
							document
								.querySelector(".iq-navbar")
								.classList.add(`${allNavbarType}`);
						}
						if (allNavbarType == "navs-bg-color") {
							document
								.querySelector(".iq-navbar")
								.classList.remove(
									"nav-glass",
									"navs-sticky",
									"navs-transparent"
								);
							document
								.querySelector(".iq-navbar-header")
								.classList.add(`${allNavbarType}`);
						}
						checkSettingMenu("navbar", "navbar-type", allNavbarType, "noClass");
					}
				};

				updateMode();

				//dark-mode & light-mode
				const colorMode = document.querySelectorAll(
					'[data-setting="color-mode"][data-name="color"]'
				);
				Array.from(colorMode, (mode) => {
					mode.addEventListener("click", (e) => {
						Array.from(colorMode, (el) => {
							el.classList.remove("active");
							document
								.querySelector("body")
								.classList.remove(el.getAttribute("data-value"));
						});
						sessionStorage.setItem(
							"color-mode",
							mode.getAttribute("data-value")
						);
						mode.classList.add("active");
						document
							.querySelector("body")
							.classList.add(mode.getAttribute("data-value"));
						changeMode("color-mode", mode.getAttribute("data-value"));
					});
				});

				//rtl & ltr
				const dirMode = document.querySelectorAll(
					'[data-setting="dir-mode"][data-name="dir"]'
				);
				Array.from(dirMode, (mode) => {
					mode.addEventListener("click", (e) => {
						Array.from(dirMode, (el) => {
							el.classList.remove("active");
						});
						if (!mode.classList.contains("active")) {
							Array.from(
								document.querySelectorAll(
									`[data-value="${mode.getAttribute("data-value")}"]`
								),
								(el) => el.classList.add("active")
							);
							sessionStorage.setItem(
								"dir-mode",
								mode.getAttribute("data-value")
							);
							changeMode("dir-mode", mode.getAttribute("data-value"));
						}
					});
				});

				//Sidebar Color
				const sidebarColors = document.querySelectorAll(
					'[data-setting="sidebar"][data-name="sidebar-color"]'
				);
				Array.from(sidebarColors, (mode) => {
					mode.addEventListener("click", (e) => {
						Array.from(sidebarColors, (el) => {
							el.classList.remove("active");
							document
								.querySelector(".sidebar-default")
								.classList.remove(el.getAttribute("data-value"));
						});
						sessionStorage.setItem("sidebar", mode.getAttribute("data-value"));
						mode.classList.add("active");
						document
							.querySelector(".sidebar-default")
							.classList.add(mode.getAttribute("data-value"));
						changeMode("sidebar", mode.getAttribute("data-value"));
					});
				});

				// Sidebar type style
				const sidebarTypes = document.querySelectorAll(
					'[data-setting="sidebar"][data-name="sidebar-type"]'
				);
				Array.from(sidebarTypes, (sidebarType) => {
					sidebarType.addEventListener("click", (e) => {
						if (sidebarType.classList.contains("active")) {
							sidebarType.classList.remove("active");
							document
								.querySelector(".sidebar-default")
								.classList.remove(sidebarType.getAttribute("data-value"));
							const sidebarTypeIndexOf = sidebarTypeSetting.findIndex(
								(type) => type === sidebarType.getAttribute("data-value")
							);
							sidebarTypeSetting.splice(sidebarTypeIndexOf, 1);
							if (sidebarType.getAttribute("data-extra-value") !== null) {
								document
									.querySelector(".sidebar-default")
									.classList.remove(
										sidebarType.getAttribute("data-extra-value")
									);
								document
									.querySelector(
										`[data-value="${sidebarType.getAttribute(
											"data-extra-value"
										)}"]`
									)
									.classList.remove("active");

								const sidebarExtraTypeIndexOf = sidebarTypeSetting.findIndex(
									(type) =>
										type === sidebarType.getAttribute("data-extra-value")
								);
								sidebarTypeSetting.splice(sidebarExtraTypeIndexOf, 1);
							}
						} else {
							Array.from(
								document.querySelectorAll(
									`[data-value="${sidebarType.getAttribute("data-value")}"]`
								),
								(el) => el.classList.add("active")
							);
							document
								.querySelector(".sidebar-default")
								.classList.add(sidebarType.getAttribute("data-value"));
							if (
								sidebarTypeSetting.indexOf(
									sidebarType.getAttribute("data-value")
								) === -1
							) {
								sidebarTypeSetting.push(sidebarType.getAttribute("data-value"));
							}
							if (sidebarType.getAttribute("data-extra-value") !== null) {
								document
									.querySelector(".sidebar-default")
									.classList.add(sidebarType.getAttribute("data-extra-value"));
								Array.from(
									document.querySelectorAll(
										`[data-value="${sidebarType.getAttribute(
											"data-extra-value"
										)}"]`
									),
									(el) => el.classList.add("active")
								);
								if (
									sidebarTypeSetting.indexOf(
										sidebarType.getAttribute("data-extra-value")
									) === -1
								) {
									sidebarTypeSetting.push(
										sidebarType.getAttribute("data-extra-value")
									);
								}
							}
						}
						sessionStorage.setItem(
							"sidebarType",
							JSON.stringify(sidebarTypeSetting)
						);
					});
				});

				//Sidebar Active Style
				const allActiveType = document.querySelectorAll(
					'[data-setting="sidebar"][data-name="sidebar-item"]'
				);
				Array.from(allActiveType, (activeStyle) => {
					activeStyle.addEventListener("click", (e) => {
						if (!activeStyle.classList.contains("active")) {
							Array.from(allActiveType, (el) => {
								el.classList.remove("active");
								document
									.querySelector(".sidebar-default")
									.classList.remove(el.getAttribute("data-value"));
							});
							sessionStorage.setItem(
								"sidebar-style",
								activeStyle.getAttribute("data-value")
							);
							activeStyle.classList.add("active");
							Array.from(
								document.querySelectorAll(
									`[data-value="${activeStyle.getAttribute("data-value")}"]`
								),
								(el) => el.classList.add("active")
							);
							changeMode("sidebar", activeStyle.getAttribute("data-value"));
						}
					});
				});

				// Navbar Style
				const allNavbarType = document.querySelectorAll(
					'[data-setting="navbar"][data-name="navbar-type"]'
				);
				Array.from(allNavbarType, (navbarType) => {
					navbarType.addEventListener("click", (e) => {
						Array.from(allNavbarType, (el) => {
							el.classList.remove("active");
							document
								.querySelector(el.getAttribute("data-target"))
								.classList.remove(el.getAttribute("data-value"));
						});
						sessionStorage.setItem(
							"navbarTypes",
							navbarType.getAttribute("data-value")
						);
						Array.from(
							document.querySelectorAll(
								`[data-value="${navbarType.getAttribute("data-value")}"]`
							),
							(el) => el.classList.add("active")
						);
						document
							.querySelector(navbarType.getAttribute("data-target"))
							.classList.add(navbarType.getAttribute("data-value"));
						changeMode(
							"navbarTypes",
							navbarType.getAttribute("data-value"),
							navbarType.getAttribute("data-target")
						);
					});
				});

				// Navbar default style
				const defaultNavbarType = document.querySelector(
					'[data-setting="navbar"][data-name="navbar-default"]'
				);
				if (defaultNavbarType !== null) {
					defaultNavbarType.addEventListener("click", (e) => {
						document
							.querySelector(".iq-navbar")
							.classList.remove("nav-glass", "navs-sticky", "navs-transparent");
						document
							.querySelector(".iq-navbar-header")
							.classList.remove("navs-bg-color");
						sessionStorage.setItem("navbarTypes", "");
					});
				}

				// For colorChange Mode
				const customizerMode = (custombodyclass, colors, colorInfo) => {
					document.querySelector("body").classList.add(`${custombodyclass}`);
					sessionStorage.setItem(
						"colorcustomchart-mode",
						getComputedStyle(document.body).getPropertyValue("--bs-primary")
					);
					document.documentElement.style.setProperty("--bs-info", colors);
					const color = sessionStorage.getItem("colorcustomchart-mode");
					if (color !== "null" && color !== undefined && color !== "") {
						const event = new CustomEvent("ColorChange", {
							detail: { detail1: color.trim(), detail2: colors.trim() },
						});
						document.dispatchEvent(event);
					} else {
						const event = new CustomEvent("ColorChange", {
							detail: { detail1: colorInfo.trim(), detail2: colors.trim() },
						});
						document.dispatchEvent(event);
					}
					const elements = document.querySelectorAll(
						'[data-setting="color-mode1"][data-name="color"]'
					);
					Array.from(elements, (mode) => {
						const colorclass = mode.getAttribute("data-value");
						if (colorclass === custombodyclass) {
							mode.classList.add("active");
						} else {
							mode.classList.remove("active");
						}
					});
				};

				const elements = document.querySelectorAll(
					'[data-setting="color-mode1"][data-name="color"]'
				);
				Array.from(elements, (mode) => {
					mode.addEventListener("click", (e) => {
						Array.from(elements, (el) => {
							el.classList.remove("active");
							document
								.querySelector("body")
								.classList.remove(el.getAttribute("data-value"));
						});
						sessionStorage.setItem(
							"colorcustom-mode",
							mode.getAttribute("data-value")
						);
						sessionStorage.setItem(
							"colorcustominfo-mode",
							mode.getAttribute("data-info")
						);

						mode.classList.add("active");
						const colors = mode.getAttribute("data-info");
						const color = getComputedStyle(document.body).getPropertyValue(
							"--bs-primary"
						);
						customizerMode(mode.getAttribute("data-value"), colors, color);
					});
				});

				const custombodyclass = sessionStorage.getItem("colorcustom-mode");
				const colors = sessionStorage.getItem("colorcustominfo-mode");
				const color = sessionStorage.getItem("colorcustomchart-mode");
				if (
					custombodyclass !== null &&
					custombodyclass !== undefined &&
					colors !== null &&
					colors !== undefined
				) {
					customizerMode(custombodyclass, colors, color);
				}
			})();
		});
	},
};
</script>

<style></style>
