<?php

namespace App\Http\Controllers;

use App\Entities\Cliente;
use App\Repositories\ClienteRepository;
use Illuminate\Http\Request;

class ClienteController extends Controller {

    protected $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository) {
        $this->clienteRepository = $clienteRepository;
    }

    public function index() {

        return view('home');

    }

    public function inserirCliente(Request $request) {
        try {
            $inserido = $this->clienteRepository->create($request->all());
            return response()->json($inserido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function retornarClientes() {
        $clientes = $this->clienteRepository->all();

        return response()->json($clientes);
    }

    public function atualizarCliente($idCliente, Request $request) {
        $this->clienteRepository->update($idCliente, $request->all());

        return redirect()->back();
    }

    public function deletarCliente($idCliente, Request $request) {

        $cliente = Cliente::findOrFail($idCliente);

        $cliente->delete($request->all());

        return redirect()->back();
    }

    public function removeClientes(Request $request) {
        try {
            $removido = $this->clienteRepository->delete($request->id);
            return response()->json($removido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function editarCliente(Request $request) {
        $this->clienteRepository->update([
                                    'nome_cliente' => $request->nomeClienteEditar,
                                    'cpf_cliente' => $request->cpfClienteEditar
                                  ], $request->idClienteEditar);

        return view('home');
    }

}
