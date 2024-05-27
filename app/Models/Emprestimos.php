<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Emprestimos extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuarios_id',
        'livros_id',
        'data_emprestimo',
        'data_devolucao'
    ];

    public function usuario(): HasOne 
    {
        return $this->hasOne(Usuarios::class);
    }

    public function livro(): HasOne 
    {
        return $this->hasOne(Livros::class);
    }
}
