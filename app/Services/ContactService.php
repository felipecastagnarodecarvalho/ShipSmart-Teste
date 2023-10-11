<?php

namespace App\Services;

use App\Repositories\ContactRepository;

class ContactService
{
    protected $repository;

    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllContacts()
    {
        $data = $this->repository->getAll();
        dd($data);
    }
}
