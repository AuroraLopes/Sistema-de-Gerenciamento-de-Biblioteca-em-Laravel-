<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Interfaces\EmprestimosRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
 
class EmprestimosController extends Controller
{
    private EmprestimosRepositoryInterface $emprestimosRepository;


    public function __construct(EmprestimosRepositoryInterface $emprestimosRepository) 
    {
        $this->emprestimosRepository = $emprestimosRepository;
    }

    public function getEmprestimosById(Request $request): JsonResponse
    {
        $emprestimoId = $request->route('id');

        return response()->json([
            'data' => $this->emprestimosRepository->getEmprestimosById($emprestimoId)
        ]);
    }


    public function getAll(): JsonResponse 
    {
        return response()->json([
            'data' => $this->emprestimosRepository->getAll()
        ]);
    }

    public function create(Request $request): JsonResponse 
    {
        $emprestimo = $request->only([
            'usuarios_id',
            'livros_id',
            'data_emprestimo',
            'data_devolucao'
        ]);

        return response()->json(
            [
                'data' => $this->emprestimosRepository->create($emprestimo)
            ],
            Response::HTTP_CREATED
        );
    }

    public function update(Request $request): JsonResponse 
    {
        $emprestimoId = $request->route('id');
        $emprestimo = $request->only([
            'usuarios_id',
            'livros_id',
            'data_emprestimo',
            'data_devolucao'
        ]);

        return response()->json([
            'data' => $this->emprestimosRepository->update($emprestimoId, $emprestimo)
        ]);
    }

    public function delete(Request $request): JsonResponse 
    {
        $emprestimoId = $request->route('id');
        $this->emprestimosRepository->deleteById($emprestimoId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}