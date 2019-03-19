<div style="display: none" id = "formRelatorioNota">
    <form action="{{route('gerarPDF')}}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Data Inicial</label>
            <input type="date" name="dataInicial" class="form-control">
        </div>

        <div class="form-group">
            <label>Data Final</label>
            <input type="date" name="dataFinal" class="form-control">
        </div>

        <div class="form-group">
            <label>Cliente</label>
            <select class="form-control" id="clientesRelatorioNota" name='cliente_id'>
            </select>
            <br>
        </div>

        <div class="form-group">
            <label>Valor Total</label>
            <input type="number" name="valor_total_nota" id="valor_total_nota" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Gerar</button>
        </div>
    </form>
</div>
