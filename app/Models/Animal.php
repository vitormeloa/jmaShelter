<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais';

    protected $fillable = [
        'nome', 'especie', 'raca', 'data_chegada', 'descricao', 'status', 'vacinado', 'castrado'
    ];

    public function adotantes(): BelongsToMany
    {
        return $this->belongsToMany(Adotante::class, 'adocoes');
    }
}
