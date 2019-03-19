<div class="container" id = "listapdf">
    <h2>Relatório de Notas</h2>
    <table border="1">
        <thead>
        <tr>
            <th scope="col">Numero da Nota</th>
            <th scope="col">Nome do Cliente</th>
            <th scope="col">Data</th>
            <th scope="col">Valor Total da Nota</th>
        </tr>
        </thead>
        <tbody>
            @foreach($dadosRelatorio as $dadoRelatorio)
                <tr>
                    <td>{{$dadoRelatorio->numero_nota}}</td>
                    <td>{{$dadoRelatorio->cliente->nome_cliente}}</td>
                    <td>{{$dadoRelatorio->created_at}}</td>
                    <td>R$ {{$dadoRelatorio->valor_total_nota}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
