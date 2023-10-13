<!-- resources/js/views/Home.vue -->
<template>
    <div class="p-4 col-span-6 md:col-span-2">
        <div class="grid grid-cols-5">
            <div
                class="md:col-span-5 group relative flex items-left gap-x-6 rounded-lg p-3 text-sm leading-6 hover:bg-indigo-50"
            >
                <div
                    style="text-align: center"
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white mx-auto md:mx-0"
                >
                    <router-link
                        class="mx-auto items-center justify-center h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        to="/"
                    >
                        <i class="fa fa-plus"></i>
                    </router-link>
                </div>
                <div class="flex-auto my-auto items-center hidden md:block">
                    <router-link to="/" class="font-semibold text-gray-900">{{
                        t("add_contact")
                    }}</router-link>
                </div>
            </div>

            <div
                class="md:col-span-5 group relative flex items-left gap-x-6 rounded-lg p-3 text-sm leading-6 hover:bg-indigo-50"
            >
                <div
                    style="text-align: center"
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white mx-auto md:mx-0"
                >
                    <router-link
                        class="mx-auto items-center justify-center h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        to="/contacts"
                    >
                        <i class="fa fa-address-book"></i>
                    </router-link>
                </div>
                <div class="flex-auto my-auto items-center hidden md:block">
                    <router-link
                        to="/contacts"
                        class="font-semibold text-gray-900"
                        >{{ t("my_contacts") }}</router-link
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="menu absolute top-0 right-0 p-4">
        <div class="flex gap-4">
            <button
                @click="changeLanguage('en')"
                :class="{ 'font-semibold underline': currentLanguage === 'en' }"
            >
                English
            </button>
            <button
                @click="changeLanguage('pt')"
                :class="{ 'font-semibold underline': currentLanguage === 'pt' }"
            >
                Português
            </button>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
import { useI18n } from "vue-i18n";

export default {
    name: "SideMenu",
    setup() {
        const { locale, t } = useI18n();
        const currentLanguage = ref(locale.value);

        const changeLanguage = (newLanguage) => {
            currentLanguage.value = newLanguage;
            locale.value = newLanguage;
        };

        return { currentLanguage, changeLanguage, t };
    },
};
</script>
