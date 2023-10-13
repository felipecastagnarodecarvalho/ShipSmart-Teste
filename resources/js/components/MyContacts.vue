<!-- resources/js/views/Home.vue -->
<template>
    <router-view>
        <div class="w-10/12 mx-auto my-12 max-w-6xl">
            <div
                class="lg:col-start-2 col-span-12 lg:col-span-10 grid grid-cols-6 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 mx-auto"
            >
                <side-menu />
                <div class="p-4 col-span-6 md:col-span-4">
                    <div class="mx-auto grid grid-cols-2 gap-x-8 gap-y-10">
                        <div class="col-span-2">
                            <div
                                v-show="contacts.length <= 0 && !isLoading"
                                class="mt-6 mb-6 w-full overflow-hidden"
                            >
                                Nenhum contato registrado.
                            </div>
                            <div
                                v-for="contact in paginatedContacts"
                                :key="contact.id"
                                class="mt-5 mb-5 w-full overflow-hidden rounded-lg shadow-lg"
                            >
                                <div class="pl-6 pr-3 py-2">
                                    <div
                                        class="font-bold text-xl flex justify-between items-center"
                                    >
                                        <div>
                                            <i class="fa fa-address-card"></i>
                                            {{ contact.nome_de_contato }}
                                        </div>
                                        <div>
                                            <button
                                                @click="
                                                    deleteContact(contact.id)
                                                "
                                            >
                                                <i
                                                    class="fa fa-trash text-red-500 mr-2"
                                                ></i>
                                            </button>

                                            <i
                                                class="fa fa-pencil text-yellow-300 ml-2"
                                            ></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 py-2">
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>Email:</b>
                                        {{ contact.email_de_contato }}
                                    </span>
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>Telefone:</b>
                                        {{ contact.telefone_de_contato }}
                                    </span>
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>CEP:</b> {{ contact.CEP }}
                                    </span>
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>Estado:</b> {{ contact.estado }}
                                    </span>
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>Cidade:</b> {{ contact.cidade }}
                                    </span>
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>Bairro:</b> {{ contact.bairro }}
                                    </span>
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>Rua:</b> {{ contact.endereco }}
                                    </span>
                                    <span
                                        class="inline-block m-1 bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                    >
                                        <b>Número:</b> {{ contact.numero }}
                                    </span>
                                </div>
                            </div>
                            <div
                                v-show="contacts.length > 0"
                                class="flex justify-center my-4"
                            >
                                <button
                                    @click="prevPage"
                                    :disabled="currentPage === 1"
                                    class="px-2 py-1 bg-gray-500 text-white"
                                >
                                    {{ "<" }}
                                </button>
                                <!-- Display page numbers as buttons for direct navigation -->
                                <template
                                    v-for="pageNumber in pageNumbers"
                                    :key="pageNumber"
                                >
                                    <button
                                        @click="goToPage(pageNumber)"
                                        :class="[
                                            'px-2 py-1',
                                            {
                                                'bg-blue-500 text-white':
                                                    pageNumber === currentPage,
                                                'bg-gray-300 text-gray-700':
                                                    pageNumber !== currentPage,
                                            },
                                        ]"
                                    >
                                        {{ pageNumber }}
                                    </button>
                                </template>
                                <button
                                    @click="nextPage"
                                    :disabled="currentPage === totalPages"
                                    class="px-2 py-1 bg-gray-500 text-white"
                                >
                                    {{ ">" }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="loader-container" v-if="isLoading">
            <div class="loader"></div>
        </div>
        <Alerts />
    </router-view>
</template>

<script>
import { ref } from "vue";
import SideMenu from "./SideMenu.vue";
import { useAlertsStore } from "../store/alerts.js";
import Alerts from "./Alerts.vue";

export default {
    name: "MyContacts",
    components: {
        SideMenu,
        Alerts,
    },
    data() {
        return {
            isLoading: false,
            contacts: {},
            currentPage: 1,
            pageSize: 5,
        };
    },
    computed: {
        totalPages() {
            return Math.ceil(this.contacts.length / this.pageSize);
        },
        startIndex() {
            return (this.currentPage - 1) * this.pageSize;
        },
        endIndex() {
            return this.currentPage * this.pageSize;
        },
        paginatedContacts() {
            return this.contacts.slice(this.startIndex, this.endIndex);
        },
        pageNumbers() {
            return Array.from({ length: this.totalPages }, (_, i) => i + 1);
        },
    },
    setup() {
        const isLoading = ref(false);
        const contacts = ref([]);

        const fetchData = async () => {
            try {
                isLoading.value = true;
                const response = await axios.get(
                    "http://localhost/api/contacts"
                );
                isLoading.value = false;
                contacts.value = response.data;
            } catch (error) {
                isLoading.value = false;
            }
        };

        fetchData();

        return {
            isLoading,
            contacts,
        };
    },
    methods: {
        prevPage() {
            if (this.currentPage > 1) {
                this.currentPage--;
            }
        },
        nextPage() {
            if (this.currentPage < this.totalPages) {
                this.currentPage++;
            }
        },
        goToPage(pageNumber) {
            this.currentPage = pageNumber;
        },
        deleteContact(contactId) {
            const alertsStore = useAlertsStore();
            this.isLoading = true;

            axios
                .delete(`http://localhost/api/contact/${contactId}`)
                .then(() => {
                    const index = this.contacts.findIndex(
                        (contact) => contact.id === contactId
                    );
                    if (index !== -1) {
                        this.contacts.splice(index, 1);
                    }
                    alertsStore.addAlert({
                        message: "Contato removido com sucesso!",
                        type: "success",
                    });
                    this.isLoading = false;
                })
                .catch((error) => {
                    alertsStore.addAlert({
                        message: "Falha ao remover o contato.",
                        type: "error",
                    });
                    this.isLoading = false;
                });
        },
    },
};
</script>
<style>
.loader-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #3490dc; /* Loader color */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
