/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap.js";
import { createApp } from "vue";
import { createPinia } from "pinia";
import "font-awesome/css/font-awesome.css";
import router from "./router";
import App from "./App.vue";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const pinia = createPinia();
const app = createApp(App);

import AddContact from "./components/AddContact.vue";

app.use(router);
app.use(pinia);

app.component("add-contact", AddContact);

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount("#app");
