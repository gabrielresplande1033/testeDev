<?php

namespace App\Http\Controllers;

use App\Repositories\ProdutoRepository;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    protected $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    public function inserirProduto(Request $request){
        try {
            $inserido = $this->produtoRepository->create($request->all());
            return response()->json($inserido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function retornarProdutos()
    {
        $produtos = $this->produtoRepository->all();

        return response()->json($produtos);
    }

    public function removeProdutos(Request $request) {
        try {
            $removido = $this->produtoRepository->delete($request->id);
            return response()->json($removido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function editarProduto(Request $request) {

        dd($request);
        $this->produtoRepository->update([
                                                'nome_produto' => $request->nomeProdutoEditar,
                                                'valor' => $request->valorProdutoEditar
                                        ], $request->idProdutoEditar);

        return view('home');
    }
}
