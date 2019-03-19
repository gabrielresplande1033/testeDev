<div style="display:none" id = "formProdutoEditar">
    <form action="{{route('editarProduto')}}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeProdutoEditar" id="nomeProdutoEditar" value="">
            <input name="idProdutoEditar" id="idProdutoEditar" value="" style="display: none">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Valor Produto</label>
            <input type="number" name="valorProdutoEditar" id="valorProdutoEditar" value="" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" title="Editar Produto">Editar Produto</button>
    </form>
</div>
