<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $ContactService)
    {
        $this->contactService = $ContactService;
    }

    public function testGetAll(Request $request)
    {
        $this->contactService->getAllContacts();
    }

    public function show($id)
    {
        $contacts = $this->contactService->getContact($id);
        return response()->json($contacts, 200);
    }

    public function store(Request $request)
    {
        $request->headers->set('Accept', 'application/json');

        $request->validate([
            'nome_de_contato' => 'required|max:55',
            'email_de_contato' => 'required|max:55',
            'telefone_de_contato' => 'required|max:18',
            'CEP' => 'required|max:9',
            'estado' => 'required|max:100',
            'cidade' => 'required|max:150',
            'bairro' => 'required|max:150',
            'endereco' => 'required|max:150',
            'numero' => 'required|max:8',
        ]);

        $contact = $this->contactService->createContact($request);

        if (!$contact) {
            return response()->json(__('messages.contact.created.fail'), 400);
        }

        return response()->json([
            $contact,
            'message' => __('messages.contact.created.success')
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->headers->set('Accept', 'application/json');

        $request->validate([
            'nome_de_contato' => 'max:55',
            'email_de_contato' => 'max:55',
            'telefone_de_contato' => 'max:18',
            'CEP' => 'max:9',
            'estado' => 'max:100',
            'cidade' => 'max:150',
            'bairro' => 'max:150',
            'endereco' => 'max:150',
            'numero' => 'max:8',
        ]);

        if (!$this->contactService->contactExists($id)) {
            return response()->json(__('messages.contact.update.fail'), 400);
        }

        $contact = $this->contactService->updateContact($id, $request);

        if (!$contact) {
            return response()->json(__('messages.contact.update.fail'), 400);
        }

        return response()->json([
            $contact,
            'message' => __('messages.update.success')
        ], 200);
    }

    public function destroy($id)
    {
        if (!$this->contactService->contactExists($id)) {
            return response()->json(__('messages.contact.delete.fail'), 400);
        }

        if (!$this->contactService->deleteContact($id)) {
            return response()->json(__('messages.contact.delete.fail'), 400);
        }

        return response()->json([
            'message' => __('messages.contact.delete.success')
        ], 200);
    }

    public function showAll(Request $request)
    {
        $contacts = $this->contactService->getAllContacts();
        return response()->json($contacts, 200);
    }

    public function getDataByCEP(Request $request)
    {
        $request->validate([
            'cep' => 'required|max:9',
        ]);

        $cep = $request->input('cep');

        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->successful()) {
            $endereco = $response->json();

            $data =[
                'logadouro' => $endereco['logradouro'],
                'bairro' => $endereco['bairro'],
                'localidade' => $endereco['localidade'],
                'uf' => $endereco['uf']
            ];

            return response()->json($data);
        } else {
            return response()->json(['message' => 'CEP não encontrado'], 404);
        }
    }
}
