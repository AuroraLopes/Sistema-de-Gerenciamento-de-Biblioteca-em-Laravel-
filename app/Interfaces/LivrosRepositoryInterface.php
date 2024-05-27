<?php

namespace App\Interfaces;

interface LivrosRepositoryInterface 
{
    public function getAll();
    public function getLivrosById($livrosId);
    public function deleteById($livrosId);
    public function create(array $livros);
    public function update($livrosId, array $livros);
}