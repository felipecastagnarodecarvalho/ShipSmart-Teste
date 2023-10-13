import { createRouter, createWebHistory } from "vue-router";
import AddContact from "./components/AddContact.vue";
import MyContacts from "./components/MyContacts.vue";
import EditContact from "./components/EditContact.vue";

const routes = [
    { path: "/", component: AddContact },
    { path: "/contacts", component: MyContacts },
    { path: "/contact/:id", component: EditContact },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
