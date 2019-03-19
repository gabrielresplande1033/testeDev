@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >Controle de Notas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Cliente
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" id="abrirFormularioCliente" href="#">Inserir Cliente</a>
                                            <a class="dropdown-item" id="abrirListaCliente" href="#">Listar Clientes</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Produto
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" id = "abrirFormularioProduto" href="#">Inserir Produto</a>
                                            <a class="dropdown-item" id = "abrirListaProduto" href="#">Listar Produtos</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Nota
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" id = "abrirFormularioNota" href="#">Inserir Nota</a>
                                            <a class="dropdown-item" id = "abrirListaNota" href="#">Listar Notas</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Relatório
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" id="abrirFormularioRelatorioNota" href="#">Gerar Relatório de Notas</a>
                                        </div>
                                    </li>




                                </ul>
                            </div>
                        </nav>


                        @include('inicial')
                        @include('cliente.formcliente')
                        @include('cliente.listacliente')
                        @include('nota.formnota')
                        @include('nota.formrelatorio')
                        @include('nota.listanota')
                        @include('produto.formproduto')
                        @include('produto.formprodutoeditar')
                        @include('cliente.formclienteeditar')
                        @include('produto.listaprodutos')



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
