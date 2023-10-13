<!-- resources/js/views/Home.vue -->
<template>
    <router-view>
        <div class="w-10/12 mx-auto my-12 max-w-6xl">
            <div
                class="lg:col-start-2 col-span-12 lg:col-span-10 grid grid-cols-6 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 mx-auto"
            >
                <side-menu></side-menu>
                <edit-contact-fields />
            </div>
        </div>
    </router-view>
</template>

<script>
import EditContactFields from "./EditContactFields.vue";
import SideMenu from "./SideMenu.vue";

export default {
    name: "EditContact",
    components: {
        EditContactFields,
        SideMenu,
    },
};
</script>
