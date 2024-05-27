<?php

namespace App\Repositories;

use App\Interfaces\AutoresRepositoryInterface;
use App\Models\Autores;

class AutoresRepository implements AutoresRepositoryInterface 
{
    public function getAll() 
    {
        return Autores::all();
    }

    public function getAutoresById($autoresId) 
    {
        return Autores::findOrFail($autoresId);
    }

    public function deleteById($autoresId) 
    {
        return Autores::destroy($autoresId);
    }

    public function create(array $autores) 
    {
        return Autores::create($autores);
    }

    public function update($autoresId, array $autores) 
    {
        Autores::whereId($autoresId)->update($autores);
        return $this->getAutoresById($autoresId);
    }
}