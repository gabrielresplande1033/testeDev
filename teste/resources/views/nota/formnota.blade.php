<div style="display: none" id = "formNota">
<form action="{{route('inserirNota')}}" method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
            <label>Número da Nota</label>
            <input type="number" name="numero_nota" class="form-control" placeholder="Inserir Número">
    </div>
    <div class="form-group">
            <label>Cliente</label>
            <select class="form-control" id="clientesNota" name='cliente_id'>
            </select>
            <br>
    </div>

    <div class="form-group">
        <label>Produtos</label>
        <select class="form-control" id="produtosNota">
        </select>

        <a class="btn btn-primary" id="adicionaProdutoLista">Adicionar Produtos</a>
        <br>
        <ul id="listaProdutos">
        </ul>
    </div>

    <div class="formgroup">
        <label>Valor Total</label>
        <input type="number" name="valor_total_nota" id="valor_total_nota" class="form-control" value="0" readonly="true">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
</div>
