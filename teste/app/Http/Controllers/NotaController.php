<?php

namespace App\Http\Controllers;

use App\Repositories\NotaProdutoRepository;
use App\Repositories\NotaRepository;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

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

    public function retornarNotas()
    {
        $notas = $this->notaRepository->retornaNotaComValorTotal();

        return response()->json($notas);
    }

    public function removeNotas(Request $request) {
        try {
            $removido = $this->notaRepository->delete($request->id);
            return response()->json($removido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function gerarPDF(Request $request) {
        $dadosRelatorio = $this->notaRepository->relatorio($request);

        $pdf = PDF::loadView("nota.pdf", compact('dadosRelatorio'));
        return $pdf->download("documento.pdf");

    }

}
