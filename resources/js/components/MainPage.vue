<!-- resources/js/views/Home.vue -->
<template>
    <div class="w-10/12 mx-auto my-12 max-w-6xl">
        <div
            class="lg:col-start-2 col-span-12 lg:col-span-10 grid grid-cols-6 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 mx-auto"
        >
            <div class="p-4 col-span-6 md:col-span-2">
                <div class="grid grid-cols-5">
                    <div
                        class="md:col-span-5 group relative flex items-left gap-x-6 rounded-lg p-3 text-sm leading-6 hover:bg-indigo-50"
                    >
                        <div
                            style="text-align: center"
                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white mx-auto md:mx-0"
                        >
                            <div
                                class="mx-auto items-center justify-center h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <div
                            class="flex-auto my-auto items-center hidden md:block"
                        >
                            <a href="#" class="font-semibold text-gray-900">
                                Add new Contact
                            </a>
                        </div>
                    </div>

                    <div
                        class="md:col-span-5 group relative flex items-left gap-x-6 rounded-lg p-3 text-sm leading-6 hover:bg-indigo-50"
                    >
                        <div
                            style="text-align: center"
                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white mx-auto md:mx-0"
                        >
                            <div
                                class="mx-auto items-center justify-center h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <div
                            class="flex-auto my-auto items-center hidden md:block"
                        >
                            <a href="#" class="font-semibold text-gray-900">
                                My Contacts
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <add-contact></add-contact>
        </div>
    </div>
</template>

<script>
import AddContact from "./AddContact.vue";

export default {
    components: {
        AddContact,
    },
};
</script>
