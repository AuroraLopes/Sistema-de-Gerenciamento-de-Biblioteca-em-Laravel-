<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Interfaces\LivrosRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
 
class LivrosController extends Controller
{
    private LivrosRepositoryInterface $livrosRepository;


    public function __construct(LivrosRepositoryInterface $livrosRepository) 
    {
        $this->livrosRepository = $livrosRepository;
    }

    public function getLivrosById(Request $request): JsonResponse
    {
        $livroId = $request->route('id');
        $livroModel = $this->livrosRepository->getLivrosById($livroId);
        $livroModel->load('autores');
        $livroModel->load('emprestimos');

        return response()->json([
            'data' => $livroModel
        ]);
    }


    public function getAll(): JsonResponse 
    {
        return response()->json([
            'data' => $this->livrosRepository->getAll()
        ]);
    }

    public function create(Request $request): JsonResponse 
    {
        $livro = $request->only([
            'titulo',
            'ano_de_publicacao'
        ]);

        $autores = $request->only([
            'autores',
        ])['autores'];


        $livroModel = $this->livrosRepository->create($livro);
        $livroModel->autores()->sync($autores, true);
        $livroModel->load('autores');
        
        return response()->json(
            [
                'data' => $livroModel
            ],
            Response::HTTP_CREATED
        );
    }

    public function update(Request $request): JsonResponse 
    {
        $livroId = $request->route('id');
        $livro = $request->only([
            'titulo',
            'ano_de_publicacao'
        ]);
        
        $autores = $request->only([
            'autores',
        ])['autores'];

        $livroModel = $this->livrosRepository->update($livroId, $livro);
        $livroModel->autores()->detach();
        $livroModel->autores()->sync($autores, true);
        $livroModel->load('autores');
        $livroModel->load('emprestimos');
        return response()->json(
            [
                'data' => $livroModel
            ]
        );
    }

    public function delete(Request $request): JsonResponse 
    {
        $livroId = $request->route('id');
        $this->livrosRepository->deleteById($livroId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}