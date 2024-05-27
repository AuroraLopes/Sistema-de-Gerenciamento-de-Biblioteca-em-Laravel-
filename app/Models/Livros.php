<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Livros extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'ano_de_publicacao'
    ];

    public function autores(): BelongsToMany
    {
        return $this->belongsToMany(Autores::class, "autores_livro");
    }

    public function emprestimos(): HasMany
    {
        return $this->hasMany(Emprestimos::class);
    }
}
