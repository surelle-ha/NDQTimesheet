<template>
	<div class="tabs">
		<div role="tablist" aria-label="Navigation">
			<button role="tab" aria-selected="true" id="home">
				<svg
					width="20"
					height="20"
					viewBox="0 0 20 20"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M1 10L3 8M3 8L10 1L17 8M3 8V18C3 18.2652 3.10536 18.5196 3.29289 18.7071C3.48043 18.8946 3.73478 19 4 19H7M17 8L19 10M17 8V18C17 18.2652 16.8946 18.5196 16.7071 18.7071C16.5196 18.8946 16.2652 19 16 19H13M7 19C7.26522 19 7.51957 18.8946 7.70711 18.7071C7.89464 18.5196 8 18.2652 8 18V14C8 13.7348 8.10536 13.4804 8.29289 13.2929C8.48043 13.1054 8.73478 13 9 13H11C11.2652 13 11.5196 13.1054 11.7071 13.2929C11.8946 13.4804 12 13.7348 12 14V18C12 18.2652 12.1054 18.5196 12.2929 18.7071C12.4804 18.8946 12.7348 19 13 19M7 19H13"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</svg>
				<span class="label">Home</span>
			</button>
			<button role="tab" aria-selected="false" id="likes">
				<svg
					width="20"
					height="18"
					viewBox="0 0 20 18"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M2.31804 2.31799C1.90017 2.73586 1.5687 3.23194 1.34255 3.7779C1.1164 4.32387 1 4.90904 1 5.49999C1 6.09095 1.1164 6.67611 1.34255 7.22208C1.5687 7.76805 1.90017 8.26413 2.31804 8.68199L10 16.364L17.682 8.68199C18.526 7.83807 19.0001 6.69347 19.0001 5.49999C19.0001 4.30651 18.526 3.16191 17.682 2.31799C16.8381 1.47407 15.6935 0.999966 14.5 0.999966C13.3066 0.999966 12.162 1.47407 11.318 2.31799L10 3.63599L8.68204 2.31799C8.26417 1.90012 7.7681 1.56865 7.22213 1.3425C6.67616 1.11635 6.09099 0.999954 5.50004 0.999954C4.90909 0.999954 4.32392 1.11635 3.77795 1.3425C3.23198 1.56865 2.7359 1.90012 2.31804 2.31799V2.31799Z"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</svg>
				<span class="label">Likes</span>
			</button>
			<button role="tab" aria-selected="false" id="search">
				<svg
					width="20"
					height="20"
					viewBox="0 0 20 20"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M19 19L13 13L19 19ZM15 8C15 8.91925 14.8189 9.82951 14.4672 10.6788C14.1154 11.5281 13.5998 12.2997 12.9497 12.9497C12.2997 13.5998 11.5281 14.1154 10.6788 14.4672C9.82951 14.8189 8.91925 15 8 15C7.08075 15 6.1705 14.8189 5.32122 14.4672C4.47194 14.1154 3.70026 13.5998 3.05025 12.9497C2.40024 12.2997 1.88463 11.5281 1.53284 10.6788C1.18106 9.82951 1 8.91925 1 8C1 6.14348 1.7375 4.36301 3.05025 3.05025C4.36301 1.7375 6.14348 1 8 1C9.85652 1 11.637 1.7375 12.9497 3.05025C14.2625 4.36301 15 6.14348 15 8Z"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</svg>
				<span class="label">Search</span>
			</button>
			<button role="tab" aria-selected="false" id="profile">
				<svg
					width="16"
					height="20"
					viewBox="0 0 16 20"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M12 5C12 6.06087 11.5786 7.07828 10.8284 7.82843C10.0783 8.57857 9.06087 9 8 9C6.93913 9 5.92172 8.57857 5.17157 7.82843C4.42143 7.07828 4 6.06087 4 5C4 3.93913 4.42143 2.92172 5.17157 2.17157C5.92172 1.42143 6.93913 1 8 1C9.06087 1 10.0783 1.42143 10.8284 2.17157C11.5786 2.92172 12 3.93913 12 5V5ZM8 12C6.14348 12 4.36301 12.7375 3.05025 14.0503C1.7375 15.363 1 17.1435 1 19H15C15 17.1435 14.2625 15.363 12.9497 14.0503C11.637 12.7375 9.85652 12 8 12V12Z"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</svg>
				<span class="label">Profile</span>
			</button>
		</div>
		<div role="tabpanel" aria-labelledby="home"></div>
		<div role="tabpanel" aria-labelledby="likes" hidden></div>
		<div role="tabpanel" aria-labelledby="search" hidden></div>
		<div role="tabpanel" aria-labelledby="profile" hidden></div>
	</div>
</template>

<script>
import { onMounted } from "vue";
export default {
	setup() {
		onMounted(() => {
			const tabs = document.querySelector(".tabs");
			const tabButtons = document.querySelectorAll('[role="tab"]');
			const tabPanels = document.querySelectorAll('[role="tabpanel"]');

			// handle click
			function handleClick(e) {
				tabPanels.forEach((tabPanel) => {
					tabPanel.hidden = true;
					tabPanel.classList.remove("active");
				});

				tabButtons.forEach((tabButton) => {
					tabButton.setAttribute("aria-selected", "false");
				});
				e.currentTarget.setAttribute("aria-selected", "true");

				const { id } = e.currentTarget;

				const tabPanel = tabs.querySelector(`[aria-labelledby="${id}"]`);
				tabPanel.hidden = false;
				tabPanel.classList.add("active");

				const label = e.currentTarget.querySelector(".label");
				console.log(label.offsetWidth);
			}

			tabButtons.forEach((tabButton) => {
				tabButton.addEventListener("click", handleClick);
			});
		});
	},
};
</script>

<style scoped>
:root {
	--light: #ffffff;
	--dark: #000000;
	--color1: #5b37b7;
	--color1-light: #dfd7f3;
	--color2: #c9379d;
	--color2-light: #f6d6ee;
	--color3: #e6a919;
	--color3-light: #fbefd3;
	--color4: #1194aa;
	--color4-light: #d1ebef;
	--label-width: 0;
}

*,
*::before,
*::after {
	box-sizing: border-box;
}

html,
body {
	width: 100vw;
	height: 100vh;
	margin: 0;
	padding: 0;
	font-family: "Poppins", sans-serif;
}
.tabs {
	display: none;

	position: fixed; /* Fixed at the bottom */
	bottom: 0; /* Align to bottom */
	left: 0; /* Align to left */
	width: 100%; /* Full width */
	justify-content: space-around; /* Space out the tabs */
	background-color: var(--light); /* Background color */
	box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); /* Shadow for a lifted effect */
	padding: 0.5rem 0; /* Padding */
	z-index: 100; /* Ensure it's above other elements */
}
.tabs,
[role="tabpanel"] {
	width: 100vw;
	height: 100vh;
}

[role="tabpanel"][aria-labelledby="home"] {
	background-color: var(--color1);
}

[role="tabpanel"][aria-labelledby="likes"] {
	background-color: var(--color2);
}

[role="tabpanel"][aria-labelledby="search"] {
	background-color: var(--color3);
}

[role="tabpanel"][aria-labelledby="profile"] {
	background-color: var(--color4);
}

[role="tablist"] {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 560px;
	height: 120px;
	position: absolute;
	top: 50%;
	left: 50%;
	z-index: 1;
	transform: translate3d(-50%, -50%, 0);
	padding: 2rem;
	border-bottom-right-radius: 44px;
	border-bottom-left-radius: 44px;
	box-shadow: 0 1.7px 2.1px -10px rgba(0, 0, 0, 0.019),
		0 4.3px 5.2px -10px rgba(0, 0, 0, 0.027),
		0 8.9px 10.6px -10px rgba(0, 0, 0, 0.033),
		0 18.3px 21.9px -10px rgba(0, 0, 0, 0.041),
		0 50px 60px -10px rgba(0, 0, 0, 0.06);
	background-color: var(--light);
}

button {
	display: flex;
	align-items: center;
	appearance: none;
	border: 0;
	border-radius: 5px;
	background: transparent;
	color: var(--dark);
	padding: 15px 33px;
	font-size: 2rem;
	border-radius: 10rem;
	vertical-align: middle;
	font-weight: 500;
	cursor: pointer;
}

button span {
	overflow: hidden;
	opacity: 0;
	max-width: 0;
	width: auto;
	margin-left: 0.5rem;
	font-size: 1rem;
	transform-origin: center left;
}

button[aria-selected="true"] span {
	opacity: 1;
	max-width: 100px;
	transition: all 0.6s ease-out;
}

button svg path {
	stroke: currentColor;
}

button[aria-selected="true"]#home {
	background: var(--color1-light);
	color: var(--color1);
}

button[aria-selected="true"]#likes {
	background: var(--color2-light);
	color: var(--color2);
}

button[aria-selected="true"]#search {
	background: var(--color3-light);
	color: var(--color3);
}

button[aria-selected="true"]#profile {
	background: var(--color4-light);
	color: var(--color4);
}

.credits {
	position: absolute;
	bottom: 10px;
	right: 10px;
	margin: 0;
	padding: 1ch 2ch;
	font-size: 0.75rem;
	color: var(--light);
	border-radius: 5px;
	background: rgba(0, 0, 0, 0.3);
}

.credits a {
	color: var(--color3);
}

@media screen and (max-width: 768px) {
	.tabs {
		display: flex; /* Display the tabs */
		position: fixed; /* Fixed at the bottom */
		bottom: 0; /* Align to bottom */
		left: 0; /* Align to left */
		width: 100%; /* Full width */
		justify-content: space-around; /* Space out the tabs */
		background-color: var(--light); /* Background color */
		box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); /* Shadow for a lifted effect */
		padding: 0.5rem 0; /* Padding */
		z-index: 100; /* Ensure it's above other elements */
	}

	[role="tabpanel"] {
		padding-bottom: 100px; /* Add padding to avoid content being hidden behind tabs */
	}
}
</style>
