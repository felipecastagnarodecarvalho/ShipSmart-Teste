<?php

namespace App\Services;

use App\Repositories\ContactRepository;
use App\Models\Contact;

class ContactService
{
    protected $repository;

    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllContacts()
    {
        return $this->repository->getAllContacts();
    }

    public function createContact($request)
    {
        $data = [
            'nome_de_contato' => $request->nome_de_contato,
            'email_de_contato' => $request->email_de_contato,
            'telefone_de_contato' => $request->telefone_de_contato,
            'CEP' => $request->CEP,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
        ];

        return $this->repository->createContact($data);
    }

    public function getContact($id)
    {
        return $this->repository->getContact($id);
    }

    public function contactExists($id)
    {
        return $this->repository->contactExists($id);
    }

    public function updateContact($id, $request)
    {
        $data = [
            'nome_de_contato' => $request->nome_de_contato,
            'email_de_contato' => $request->email_de_contato,
            'telefone_de_contato' => $request->telefone_de_contato,
            'CEP' => $request->CEP,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
        ];

        return $this->repository->updateContact($id, $data);
    }

    public function deleteContact($id)
    {
        return $this->repository->deleteContact($id);
    }
}
