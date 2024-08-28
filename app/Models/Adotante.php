<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Adotante extends Model
{
    use HasFactory;

    protected $table = 'adotantes';

    protected $fillable = [
        'cpf', 'nome', 'email', 'endereco', 'telefone', 'data_nascimento'
    ];

    public function animais(): BelongsToMany
    {
        return $this->belongsToMany(Animal::class, 'adocoes');
    }
}

