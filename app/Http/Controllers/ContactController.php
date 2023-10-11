<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;

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
}
