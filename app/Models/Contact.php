<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_de_contato',
        'email_de_contato',
        'telefone_de_contato',
        'CEP',
        'estado',
        'cidade',
        'bairro',
        'endereco',
        'numero'
    ];
}
