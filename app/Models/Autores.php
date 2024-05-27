<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Autores extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_nascimento'
    ];

    public function livros(): BelongsToMany
    {
        return $this->belongsToMany(Livros::class, "autores_livro");
    }
}
