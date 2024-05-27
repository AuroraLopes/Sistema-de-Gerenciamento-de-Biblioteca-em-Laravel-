<?php

namespace App\Repositories;

use App\Interfaces\UsuariosRepositoryInterface;
use App\Models\Usuarios;

class UsuariosRepository implements UsuariosRepositoryInterface 
{
    public function getAll() 
    {
        return Usuarios::all();
    }

    public function getUsuariosById($usuarioId) 
    {
        return Usuarios::findOrFail($usuarioId);
    }

    public function deleteById($usuarioId) 
    {
        return Usuarios::destroy($usuarioId);
    }

    public function create(array $usuario) 
    {
        return Usuarios::create($usuario);
    }

    public function update($usuarioId, array $usuario) 
    {
        Usuarios::whereId($usuarioId)->update($usuario);
        return $this->getUsuariosById($usuarioId);
    }
}