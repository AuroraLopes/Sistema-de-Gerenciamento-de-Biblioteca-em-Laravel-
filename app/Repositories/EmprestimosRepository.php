<?php

namespace App\Repositories;

use App\Interfaces\EmprestimosRepositoryInterface;
use App\Models\Emprestimos;

class EmprestimosRepository implements EmprestimosRepositoryInterface 
{
    public function getAll() 
    {
        return Emprestimos::all();
    }

    public function getEmprestimosById($emprestimoId) 
    {
        return Emprestimos::findOrFail($emprestimoId);
    }

    public function deleteById($emprestimoId) 
    {
        return Emprestimos::destroy($emprestimoId);
    }

    public function create(array $emprestimo) 
    {
        return Emprestimos::create($emprestimo);
    }

    public function update($emprestimoId, array $emprestimo) 
    {
        Emprestimos::whereId($emprestimoId)->update($emprestimo);
        return $this->getEmprestimosById($emprestimoId);
    }
}