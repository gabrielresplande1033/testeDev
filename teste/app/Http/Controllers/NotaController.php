<?php

namespace App\Http\Controllers;

use App\Repositories\NotaProdutoRepository;
use App\Repositories\NotaRepository;
use Illuminate\Http\Request;

class NotaController extends Controller
{

    protected $notaRepository;

    protected $notaProdutoRepository;

    public function __construct(NotaRepository $notaRepository, NotaProdutoRepository $notaProdutoRepository)
    {
        $this->notaRepository = $notaRepository;
        $this->notaProdutoRepository = $notaProdutoRepository;
    }

    public function inserirNota(Request $request)
    {
        $produtos = $request->produtos;
        $nota = $this->notaRepository->create($request->all());
        foreach ($produtos as $idProduto) {
            $this->notaProdutoRepository->create(['id_nota' => $nota->id, 'id_produto' => $idProduto]);
        }

        return redirect()->back();
    }

}
