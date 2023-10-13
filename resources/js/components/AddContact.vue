<template>
    <div class="p-4 col-span-6 md:col-span-4">
        <div class="mx-auto grid grid-cols-2 gap-x-8 gap-y-10">
            <div class="col-span-2">
                <label
                    for="nome_de_contato"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Name</label
                >
                <div class="mt-1">
                    <input
                        required
                        id="nome_de_contato"
                        name="nome_de_contato"
                        type="text"
                        autocomplete="nome_de_contato"
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
                <div class="mt-1">
                    <input
                        required
                        id="email_de_contato"
                        name="email_de_contato"
                        type="email"
                        autocomplete="email"
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
                <div class="mt-1">
                    <input
                        required
                        id="telefone_de_contato"
                        name="telefone_de_contato"
                        type="text"
                        autocomplete="telefone_de_contato"
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
                <div class="mt-1">
                    <input
                        required
                        id="cep"
                        name="cep"
                        type="text"
                        autocomplete="cep"
                        v-model="formattedCep"
                        @input="formatCep"
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
                <div class="mt-1">
                    <input
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
                <div class="mt-1">
                    <input
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
                <div class="mt-1">
                    <input
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
                <div class="mt-1">
                    <input
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
                <div class="mt-1">
                    <input
                        required
                        id="numero"
                        name="numero"
                        type="text"
                        autocomplete="numero"
                        class="block p-2.5 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                type="button"
                class="text-sm font-semibold leading-6 text-gray-900"
            >
                Cancelar
            </button>
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
                Salvar
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "AddContact",
    data() {
        return {
            formattedCep: "", // The formatted CEP
        };
    },
    methods: {
        formatCep() {
            // Remove non-digit characters
            let cep = this.formattedCep.replace(/\D/g, "");

            // Add a dash if the CEP has reached a certain length
            if (cep.length > 5) {
                cep = cep.slice(0, 5) + "-" + cep.slice(5, 8);
            }

            // Update the formattedCep data property
            this.formattedCep = cep;
        },
    },
};
</script>
