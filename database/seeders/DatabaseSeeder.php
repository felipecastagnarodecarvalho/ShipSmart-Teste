<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Contact::factory(10)->create();
        \App\Models\Contact::factory()->create([
            'nome_de_contato' => 'Felipe Castagnaro de Carvalho',
            'email_de_contato' => 'castagnarofelipe@gmail.com',
            'telefone_de_contato' => '+5545998092892',
            'CEP' => '85852-352',
            'estado' => 'Paraná',
            'cidade' => 'Foz do Iguaçu',
            'bairro' => 'Centro',
            'endereco' => 'Avenida Iguaçu',
            'numero' => '1080',
        ]);
    }
}
