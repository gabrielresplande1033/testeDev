$("#adicionaProdutoLista").on("click", function() {
    var idProduto = $("#produtosNota option:selected").val();
    var nomeProduto = $("#produtosNota option:selected").text();
    var valorProduto = $("#produtosNota option:selected").data('valor');

    $("#listaProdutos").append('<li>' +
        '                           <input value="'+nomeProduto+'" disabled="disabled">' +
        '                           <input name="produtos[]" value="'+idProduto+'" style="display: none">' +
        '                           <a class="btn btn-danger" data-valor="'+valorProduto+'" onclick="removeProdutoLista($(this))" title="Excluir Categoria">Remover</a>' +
        '                       </li>');

    var total = parseFloat($("#totalNota").val()) + parseFloat(valorProduto);
    $("#totalNota").val(total);

});

function removeProdutoLista(elemento) {
    var valorProduto = elemento.data('valor');
    var total = parseFloat($("#totalNota").val()) - parseFloat(valorProduto);
    $("#totalNota").val(total);
    elemento.parent().remove();
}