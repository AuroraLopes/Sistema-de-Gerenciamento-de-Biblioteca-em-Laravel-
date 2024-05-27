<?php

namespace App\Repositories;

use App\Interfaces\LivrosRepositoryInterface;
use App\Models\Livros;

class LivrosRepository implements LivrosRepositoryInterface 
{
    public function getAll() 
    {
        return Livros::all();
    }

    public function getLivrosById($livrosId) 
    {
        return Livros::findOrFail($livrosId);
    }

    public function deleteById($livrosId) 
    {
        return Livros::destroy($livrosId);
    }

    public function create(array $livros) 
    {
        return Livros::create($livros);
    }

    public function update($livrosId, array $livros) 
    {
        Livros::whereId($livrosId)->update($livros);
        return $this->getLivrosById($livrosId);
    }
}