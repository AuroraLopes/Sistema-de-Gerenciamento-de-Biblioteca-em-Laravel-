<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Interfaces\UsuariosRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
 
class UsuariosController extends Controller
{

    private UsuariosRepositoryInterface $usuarioRepository;

    public function __construct(UsuariosRepositoryInterface $usuarioRepository) 
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function registrar(Request $registrar) : JsonResponse
    {
        $usuario = $registrar->only([
            'nome',
            'password',
            'email'
        ]);

        $usuario['password'] = bcrypt($usuario['password']);

        return response()->json([
            'usuarioRepository' => $this->usuarioRepository->create($usuario)
        ]);
    }


}