<template>
    <div class="p-4 col-span-6 md:col-span-4">
        <div class="text-2xl mb-4">{{ t("editing_contact") }}</div>
        <form
            form
            @submit.prevent="submitForm"
            class="mx-auto grid grid-cols-2 gap-x-8 gap-y-5"
        >
            <div class="col-span-2">
                <label
                    for="nome_de_contato"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >{{ t("name") }}</label
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
                    >{{ t("phone") }}</label
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
                    >{{ t("state") }}</label
                >
                <div>
                    <select
                        v-model="formData.estado"
                        required
                        id="estado"
                        name="estado"
                        autocomplete="estado"
                        class="block p-2.5 w-full bg-white rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    >
                        <option value="" disabled>Selecione um Estado</option>
                        <option
                            v-for="state in brazilianStates"
                            :key="state.value"
                            :value="state.value"
                        >
                            {{ state.name }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="cidade"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >{{ t("city") }}</label
                >
                <div>
                    <input
                        v-model="formData.cidade"
                        required
                        id="cidade"
                        name="cidade"
                        type="text"
                        autocomplete="cidade"
                        maxlength="150"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="cidade"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >{{ t("neighborhood") }}</label
                >
                <div>
                    <input
                        v-model="formData.bairro"
                        required
                        id="bairro"
                        name="bairro"
                        type="text"
                        autocomplete="bairro"
                        maxlength="150"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="cidade"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >{{ t("street") }}</label
                >
                <div>
                    <input
                        v-model="formData.endereco"
                        required
                        id="endereco"
                        name="endereco"
                        type="text"
                        autocomplete="rua"
                        maxlength="150"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>

            <div class="col-span-2">
                <label
                    for="numero"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >{{ t("number") }}</label
                >
                <div>
                    <input
                        v-model="formData.numero"
                        required
                        id="numero"
                        name="numero"
                        type="text"
                        autocomplete="numero"
                        maxlength="8"
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
                    {{ t("clean") }}
                </button>
                <button
                    :disabled="isLoading"
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    {{ t("save") }}
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
import { useRoute } from "vue-router";
import { useI18n } from "vue-i18n";

export default {
    name: "EditContactFields",
    components: {
        Alerts,
    },
    setup() {
        const { t } = useI18n();
        return { t };
    },
    async mounted() {
        try {
            this.isLoading = true;
            const route = useRoute();
            const contactId = route.params.id;

            await axios
                .get("http://localhost/api/contact/" + contactId)
                .then((response) => {
                    this.isLoading = false;
                    this.formData.nome_de_contato =
                        response.data.nome_de_contato;
                    this.formData.email_de_contato =
                        response.data.email_de_contato;
                    this.formData.telefone_de_contato =
                        response.data.telefone_de_contato;
                    this.formData.CEP = response.data.CEP;
                    this.formData.estado = response.data.estado;
                    this.formData.cidade = response.data.cidade;
                    this.formData.bairro = response.data.bairro;
                    this.formData.endereco = response.data.endereco;
                    this.formData.numero = response.data.numero;
                });
        } catch (error) {
            this.isLoading = false;
        }
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
            brazilianStates: [
                { name: "Acre", value: "AC" },
                { name: "Alagoas", value: "AL" },
                { name: "Amapá", value: "AP" },
                { name: "Amazonas", value: "AM" },
                { name: "Bahia", value: "BA" },
                { name: "Ceará", value: "CE" },
                { name: "Distrito Federal", value: "DF" },
                { name: "Espírito Santo", value: "ES" },
                { name: "Goiás", value: "GO" },
                { name: "Maranhão", value: "MA" },
                { name: "Mato Grosso", value: "MT" },
                { name: "Mato Grosso do Sul", value: "MS" },
                { name: "Minas Gerais", value: "MG" },
                { name: "Pará", value: "PA" },
                { name: "Paraíba", value: "PB" },
                { name: "Paraná", value: "PR" },
                { name: "Pernambuco", value: "PE" },
                { name: "Piauí", value: "PI" },
                { name: "Rio de Janeiro", value: "RJ" },
                { name: "Rio Grande do Norte", value: "RN" },
                { name: "Rio Grande do Sul", value: "RS" },
                { name: "Rondônia", value: "RO" },
                { name: "Roraima", value: "RR" },
                { name: "Santa Catarina", value: "SC" },
                { name: "São Paulo", value: "SP" },
                { name: "Sergipe", value: "SE" },
                { name: "Tocantins", value: "TO" },
            ],
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
                const contactId = this.$route.params.id;

                await axios
                    .patch(
                        "http://localhost/api/contact/" + contactId,
                        this.formData
                    )
                    .then((response) => {
                        alertsStore.addAlert({
                            message: this.t("contact_updated_sucessful"),
                            type: "success",
                        });
                        this.isLoading = false;
                    })
                    .catch(() => {
                        alertsStore.addAlert({
                            message: this.t("failed_to_update_contact"),
                            type: "error",
                        });
                        this.isLoading = false;
                    });
            } catch (error) {
                alertsStore.addAlert({
                    message: this.t("failed_to_update_contact"),
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
