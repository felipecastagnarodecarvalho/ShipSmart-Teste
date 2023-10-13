import { createRouter, createWebHistory } from "vue-router";
import AddContact from "./components/AddContact.vue";
import MyContacts from "./components/MyContacts.vue";

const routes = [
    { path: "/", component: AddContact },
    { path: "/my-contacts", component: MyContacts },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
