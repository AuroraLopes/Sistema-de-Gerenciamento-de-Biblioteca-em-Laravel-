<?php

namespace App\Interfaces;

interface UsuariosRepositoryInterface 
{
    public function getAll();
    public function getUsuariosById($autoresId);
    public function deleteById($autoresId);
    public function create(array $autores);
    public function update($autoresId, array $autores);
}