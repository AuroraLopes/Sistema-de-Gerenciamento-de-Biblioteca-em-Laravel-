<?php

namespace App\Interfaces;

interface AutoresRepositoryInterface 
{
    public function getAll();
    public function getAutoresById($autoresId);
    public function deleteById($autoresId);
    public function create(array $autores);
    public function update($autoresId, array $autores);
}