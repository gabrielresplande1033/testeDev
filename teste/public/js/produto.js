function removeProduto(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/removeProdutos",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Produto removido com sucesso", "", "success").then(function (value) {
                //location.reload();
            });
        } else {
            swal("Não foi possivel remover o Produto", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover o Produto", "", "error");
    })
}

$(document).on("click", ".inserirProduto", function () {
    var nomeProduto = $("#nomeProduto").val();
    var valorProduto = $("#valorProduto").val();

    var request = $.ajax({
        type: "POST",
        url: "/inserirProduto",
        dataType: "json",
        data: {
            nome_produto: nomeProduto,
            valor: valorProduto
        }
    });

    request.done(function (data) {
        swal("Produto cadastrado com sucesso", "", "success").then(function (value) {
            //location.reload();
        });
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possivel cadastrar o produto", "", "error");
    })

});

$(document).on("click", ".removerProduto", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover esse Produto",
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
            removeProduto(id);
        }
    });
});

$(document).on("click", "#abrirListaProduto", function () {
    var request = $.ajax({
        type: "GET",
        url: "/retornarProdutos",
        dataType: "json"

    });

    request.done(function (data) {
        $("#tabelaProdutos").children().remove();
        data.forEach(function(value, chave){
            console.log(value);
            $("#tabelaProdutos").append("<tr>\n" +
                                        "            <td>"+ value.nome_produto +"</td>\n" +
                                        "            <td>"+ value.valor +"</td>\n" +
                                        "            <td><input class='editarProduto'" +
                                        "                   data-id='"+ value.id +"'" +
                                        "                   data-nomeproduto='"+ value.nome_produto +"'" +
                                        "                   data-valor='"+ value.valor +"'" +
                                        "                   type='button' value='Editar'/></td>\n" +
                                        "            <td><input class='removerProduto' data-id='"+ value.id +"' type='button' value='Excluir'/></td>\n" +
                                        "        </tr>")
        });
    });

});


$(document).on("click", "#abrirFormularioNota", function () {
    var request = $.ajax({
        type: "GET",
        url: "/retornarProdutos",
        dataType: "json"

    });

    request.done(function (data) {
        $("#produtosNota").children().remove();
        data.forEach(function(value, chave){
            $("#produtosNota").append("<option value='"+ value.id +"' data-valor='"+ value.valor +"'>"+ value.nome_produto +"</option>")
        });
    });

});
