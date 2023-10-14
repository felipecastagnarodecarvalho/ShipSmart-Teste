<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Services\ContactService;
use App\Models\Contact;
use Illuminate\Support\Facades\Factory;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateContact()
    {
        $contactData = [
            'nome_de_contato' => 'John Doe',
            'email_de_contato' => 'john@example.com',
            'telefone_de_contato' => '+551122334455',
            'CEP' => '85800-352',
            'estado' => 'PR',
            'cidade' => 'Cascavel',
            'bairro' => 'Centro',
            'endereco' => 'Avenida Brasil',
            'numero' => '1080',
        ];

        $response = $this->post('api/contacts', $contactData);

        $response->assertStatus(200);

        $this->assertDatabaseHas('contacts', $contactData);

        $createdContact = Contact::where('nome_de_contato', 'John Doe')->first();

        $this->assertEquals('John Doe', $createdContact->nome_de_contato);
        $this->assertEquals('john@example.com', $createdContact->email_de_contato);
        $this->assertEquals('85800-352', $createdContact->CEP);
        $this->assertEquals('PR', $createdContact->estado);
        $this->assertEquals('Cascavel', $createdContact->cidade);
        $this->assertEquals('Centro', $createdContact->bairro);
        $this->assertEquals('Avenida Brasil', $createdContact->endereco);
        $this->assertEquals('1080', $createdContact->numero);
    }

    public function testUpdateContact()
    {
        $contact = Contact::factory()->create();

        $updatedData = [
            'nome_de_contato' => 'Updated Name',
            'email_de_contato' => 'updated@example.com',
            'telefone_de_contato' => '+551122334455',
            'CEP' => '85800-352',
            'estado' => 'PR',
            'cidade' => 'Cascavel',
            'bairro' => 'Centro',
            'endereco' => 'Avenida Brasil',
            'numero' => '1080',
        ];

        $response = $this->patch("api/contact/{$contact->id}", $updatedData);

        $response->assertStatus(200);

        $this->assertDatabaseHas('contacts', $updatedData);
    }

    public function testDeleteContact()
    {
        $contact = Contact::factory()->create();

        $response = $this->delete("api/contact/{$contact->id}");

        $response->assertStatus(200);

        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }

    public function testListContact()
    {
        $contacts = Contact::factory()->create();

        $response = $this->get("api/contacts");

        $response->assertStatus(200);

        $allContacts = Contact::all();

        $this->assertDatabaseCount('contacts', $allContacts->count());
    }
}

