$("#adicionaProdutoLista").on("click", function() {
    var idProduto = $("#produtosNota option:selected").val();
    var nomeProduto = $("#produtosNota option:selected").text();
    var valorProduto = $("#produtosNota option:selected").data('valor');

    $("#listaProdutos").append('<li>' +
        '                           <input value="'+nomeProduto+'" disabled="disabled">' +
        '                           <input name="produtos[]" value="'+idProduto+'" style="display: none">' +
        '                           <a class="btn btn-danger" data-valor="'+valorProduto+'" onclick="removeProdutoLista($(this))" title="Excluir Categoria">Remover</a>' +
        '                       </li>');

    var total = parseFloat($("#valor_total_nota").val()) + parseFloat(valorProduto);
    $("#valor_total_nota").val(total);

});

function removeProdutoLista(elemento) {
    var valorProduto = elemento.data('valor');
    var total = parseFloat($("#totalNota").val()) - parseFloat(valorProduto);
    $("#totalNota").val(total);
    elemento.parent().remove();
}

$(document).on("click", "#abrirListaNota", function () {
    var request = $.ajax({
        type: "GET",
        url: "/retornarNotas",
        dataType: "json"

    });

    request.done(function (data) {
        $("#tabelaNotas").children().remove();
        data.forEach(function(value, chave){
            $("#tabelaNotas").append("<tr>\n" +
                "            <td>"+ value.numero_nota +"</td>\n" +
                "            <td>"+ value.nome_cliente +"</td>\n" +
                "            <td>"+ value.valor +"</td>\n" +
                "            <td><input class='removerNota' data-id='"+ value.id +"' type='button' value='Excluir'/></td>\n" +
                "        </tr>")
        });
    });

});

$(document).on("click", ".removerNota", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover essa Nota?",
        icon: "warning",
        buttons: {
            cancel: {
                text: "Cancelar",
                visible: true,
                value: false
            },
            confirm: {
                text: "Confirmar",
                visible: true,
                value: true
            }
        }
    }).then(function (value) {
        if (value) {
            removeNota(id);
        }
    });
});

function removeNota(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/removeNotas",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Nota removida com sucesso", "", "success").then(function (value) {
                //location.reload();
            });
        } else {
            swal("Não foi possivel remover a Nota", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover a Nota", "", "error");
    })
}
