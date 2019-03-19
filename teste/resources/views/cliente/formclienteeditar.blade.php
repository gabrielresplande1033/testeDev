<div style="display: none" id = "formClienteEditar">
<form action="{{route('editarCliente')}}" method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label>Nome Cliente</label>
        <input type="text" class="form-control" placeholder="Inserir Nome" name="nomeClienteEditar" id="nomeClienteEditar">
        <input name="idClienteEditar" id="idClienteEditar" value="" style="display: none">
    </div>
    <div class="form-group">
        <label>Cpf Cliente</label>
        <input type="text" class="form-control" placeholder="Inserir CPF" name="cpfClienteEditar" id="cpfClienteEditar">
    </div>
    <button type="submit" class="btn btn-primary" title="Cadastrar Cliente">Editar Cliente</button>
</form>
</div>
