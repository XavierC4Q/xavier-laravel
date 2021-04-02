require("./bootstrap");

import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";
import Home from "./components/Home.vue";

const routes = [
    {
        path: "/",
        component: Home,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp({}).use(router).mount("#app");
