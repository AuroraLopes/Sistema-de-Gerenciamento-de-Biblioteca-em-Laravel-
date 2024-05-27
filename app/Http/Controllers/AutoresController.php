<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Interfaces\AutoresRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class AutoresController extends Controller
{
    private AutoresRepositoryInterface $autoresRepository;


    public function __construct(AutoresRepositoryInterface $autoresRepository) 
    {
        $this->autoresRepository = $autoresRepository;
    }

    public function getAutoresById(Request $request): JsonResponse
    {
        $autoresId = $request->route('id');

        return response()->json([
            'data' => $this->autoresRepository->getAutoresById($autoresId)
        ]);
    }


    public function getAll(): JsonResponse 
    {
        return response()->json([
            'data' => $this->autoresRepository->getAll()
        ]);
    }

    public function create(Request $request): JsonResponse 
    {
        $autor = $request->only([
            'nome',
            'data_nascimento'
        ]);

        return response()->json(
            [
                'data' => $this->autoresRepository->create($autor)
            ],
            Response::HTTP_CREATED
        );
    }

    public function update(Request $request): JsonResponse 
    {
        $autoresId = $request->route('id');
        $autor = $request->only([
            'nome',
            'data_nascimento'
        ]);

        return response()->json([
            'data' => $this->autoresRepository->update($autoresId, $autor)
        ]);
    }

    public function delete(Request $request): JsonResponse 
    {
        $autoresId = $request->route('id');
        $this->autoresRepository->deleteById($autoresId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}