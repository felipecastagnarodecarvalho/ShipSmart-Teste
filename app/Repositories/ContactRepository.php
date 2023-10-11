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

    public function getAll()
    {
        return $this->model->all();
    }
}
