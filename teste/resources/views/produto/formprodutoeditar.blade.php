<div style="display:none" id = "formProdutoEditar">
    <form action="{{route('editarProduto')}}" method="POST" role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeProdutoEditar" id="nomeProdutoEditar" placeholder="Inserir Nome do Produto" value="asdasd">
            <input name="idProdutoEditar" id="idProdutoEditar" style="display: none" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Valor Produto</label>
            <input type="number" name="valorProdutoEditar" id="valorProdutoEditar" class="form-control" placeholder="Valor do Produto" value="">
        </div>
        <button type="submit" class="btn btn-primary editarProduto" title="Editar Produto">Editar Produto</button>
    </form>
</div>