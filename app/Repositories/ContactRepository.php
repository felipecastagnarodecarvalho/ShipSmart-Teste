<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{
    protected $model;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    public function getAllContacts()
    {
        return $this->model->all();
    }

    public function getContact($id)
    {
        return $this->model->find($id);
    }

    public function createContact($data)
    {
        return $this->model->create($data);
    }

    public function contactExists($id)
    {
        return $this->model::where('id', $id)->exists();
    }

    public function updateContact($id, $data)
    {
        return $this->model::where('id', $id)->update($data);
    }
}
