<?php

namespace App\Interfaces;

interface EmprestimosRepositoryInterface 
{
    public function getAll();
    public function getEmprestimosById($autoresId);
    public function deleteById($autoresId);
    public function create(array $autores);
    public function update($autoresId, array $autores);
}