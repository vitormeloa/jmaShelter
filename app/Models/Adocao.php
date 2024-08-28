<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adocao extends Model
{
    use HasFactory;

    protected $table = 'adocoes';

    protected $fillable = [
        'animal_id',
        'adotante_id',
        'data_adocao',
    ];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

    public function adotante(): BelongsTo
    {
        return $this->belongsTo(Adotante::class, 'adotante_id');
    }
}
