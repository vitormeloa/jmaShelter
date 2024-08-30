<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acompanhamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'adocao_id',
        'data_visita',
        'avaliacao_saude',
        'observacoes',
        'avaliacao_relacionamento',
    ];

    public function adocao()
    {
        return $this->belongsTo(Adocao::class);
    }

    public function animal()
    {
        return $this->adocao->animal();
    }

    public function adotante()
    {
        return $this->adocao->adotante();
    }
}
