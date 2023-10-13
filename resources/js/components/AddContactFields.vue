<template>
    <div class="p-4 col-span-6 md:col-span-4">
        <form
            form
            @submit.prevent="submitForm"
            class="mx-auto grid grid-cols-2 gap-x-8 gap-y-5"
        >
            <div class="col-span-2">
                <label
                    for="nome_de_contato"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Name</label
                >
                <div>
                    <input
                        v-model="formData.nome_de_contato"
                        required
                        id="nome_de_contato"
                        name="nome_de_contato"
                        type="text"
                        autocomplete="nome_de_contato"
                        maxlength="55"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="email_de_contato"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Email</label
                >
                <div>
                    <input
                        v-model="formData.email_de_contato"
                        required
                        id="email_de_contato"
                        name="email_de_contato"
                        type="email"
                        autocomplete="email"
                        maxlength="55"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="telefone_de_contato"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Telefone</label
                >
                <div>
                    <input
                        v-model="formData.telefone_de_contato"
                        required
                        id="telefone_de_contato"
                        name="telefone_de_contato"
                        type="text"
                        autocomplete="telefone_de_contato"
                        maxlength="18"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="cep"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >CEP</label
                >
                <div>
                    <input
                        v-model="formData.CEP"
                        required
                        id="CEP"
                        name="CEP"
                        type="text"
                        autocomplete="CEP"
                        @input="formatCep"
                        maxlength="9"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="estado"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Estado</label
                >
                <div>
                    <input
                        v-model="formData.estado"
                        required
                        id="estado"
                        name="estado"
                        type="text"
                        autocomplete="estado"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="cidade"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Cidade</label
                >
                <div>
                    <input
                        v-model="formData.cidade"
                        required
                        id="cidade"
                        name="cidade"
                        type="text"
                        autocomplete="cidade"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="cidade"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Bairro</label
                >
                <div>
                    <input
                        v-model="formData.bairro"
                        required
                        id="bairro"
                        name="bairro"
                        type="text"
                        autocomplete="bairro"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="cidade"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Rua</label
                >
                <div>
                    <input
                        v-model="formData.endereco"
                        required
                        id="endereco"
                        name="endereco"
                        type="text"
                        autocomplete="rua"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="numero"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Número</label
                >
                <div>
                    <input
                        v-model="formData.numero"
                        required
                        id="numero"
                        name="numero"
                        type="text"
                        autocomplete="numero"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button
                    :disabled="isLoading"
                    type="button"
                    @click="resetForm"
                    class="text-sm font-semibold leading-6 text-gray-900"
                >
                    Limpar
                </button>
                <button
                    :disabled="isLoading"
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Salvar
                </button>
            </div>
        </form>
    </div>
    <div class="loader-container" v-if="isLoading">
        <div class="loader"></div>
    </div>
    <Alerts />
</template>

<script>
import Alerts from "./Alerts.vue";
import { useAlertsStore } from "../store/alerts.js";

export default {
    name: "AddContactFields",
    components: {
        Alerts,
    },
    data() {
        return {
            isLoading: false,
            formData: {
                nome_de_contato: "",
                email_de_contato: "",
                telefone_de_contato: "",
                CEP: "",
                estado: "",
                cidade: "",
                bairro: "",
                endereco: "",
                numero: "",
            },
        };
    },
    methods: {
        async formatCep() {
            let cep = this.formData.CEP.replace(/\D/g, "");

            if (cep.length > 5) {
                cep = cep.slice(0, 5) + "-" + cep.slice(5, 8);
            }

            this.formData.CEP = cep;

            if (cep.length >= 9) {
                this.isLoading = true;
                await axios
                    .post("http://localhost/api/cep", { cep: cep })
                    .then((response) => {
                        this.isLoading = false;
                        this.formData.estado = response.data.uf;
                        this.formData.cidade = response.data.localidade;
                        this.formData.bairro = response.data.bairro;
                        this.formData.endereco = response.data.logadouro;
                    })
                    .catch(() => {
                        this.isLoading = false;
                    });
            }
        },
        async submitForm() {
            this.isLoading = true;
            const alertsStore = useAlertsStore();

            try {
                await axios
                    .post("http://localhost/api/contacts", this.formData)
                    .then((response) => {
                        alertsStore.addAlert({
                            message: "Contato adicionado com sucesso!",
                            type: "success",
                        });
                        this.isLoading = false;
                        this.formData.nome_de_contato = "";
                        this.formData.email_de_contato = "";
                        this.formData.telefone_de_contato = "";
                        this.formData.CEP = "";
                        this.formData.estado = "";
                        this.formData.cidade = "";
                        this.formData.bairro = "";
                        this.formData.endereco = "";
                        this.formData.numero = "";
                    })
                    .catch(() => {
                        alertsStore.addAlert({
                            message: "Falha ao adicionar contato.",
                            type: "error",
                        });
                        this.isLoading = false;
                    });
            } catch (error) {
                alertsStore.addAlert({
                    message: "Falha ao adicionar contato.",
                    type: "error",
                });
                this.isLoading = false;
            }
        },
        resetForm() {
            this.formData.nome_de_contato = "";
            this.formData.email_de_contato = "";
            this.formData.telefone_de_contato = "";
            this.formData.CEP = "";
            this.formData.estado = "";
            this.formData.cidade = "";
            this.formData.bairro = "";
            this.formData.endereco = "";
            this.formData.numero = "";
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
