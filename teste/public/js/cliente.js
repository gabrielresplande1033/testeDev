$(document).on("click", ".cadastrarCliente", function () {
    var nomeCliente = $("#nomeCliente").val();
    var cpfCliente = $("#cpfCliente").val();

    var request = $.ajax({
        type: "POST",
        url: "/inserirCliente",
        dataType: "json",
        data: {
            nome_cliente: nomeCliente,
            cpf_cliente: cpfCliente
        }
    });

    request.done(function (data) {
        swal("Cliente cadastrado com sucesso", "", "success").then(function (value) {
            location.reload();
        });
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possivel cadastrar o cliente", "", "error");
    })

});

$(document).on("click", "#abrirFormularioNota", function () {
    var request = $.ajax({
        type: "GET",
        url: "/retornarClientes",
        dataType: "json"

    });

    request.done(function (data) {
        $("#clientesNota").children().remove();
        data.forEach(function(value, chave){
            $("#clientesNota").append("<option value='"+ value.id +"'>"+ value.nome_cliente +"</option>")
        });
    });

});

$(document).on("click", "#abrirFormularioRelatorioNota", function () {
    var request = $.ajax({
        type: "GET",
        url: "/retornarClientes",
        dataType: "json"

    });

    request.done(function (data) {
        $("#clientesRelatorioNota").children().remove();
        $("#clientesRelatorioNota").append("<option value=''>Nenhum</option>");
        data.forEach(function(value, chave){
            $("#clientesRelatorioNota").append("<option value='"+ value.id +"'>"+ value.nome_cliente +"</option>");
        });
    });

});

$(document).on("click", "#abrirListaCliente", function () {
    var request = $.ajax({
        type: "GET",
        url: "/retornarClientes",
        dataType: "json"

    });

    request.done(function (data) {
        $("#tabelaClientes").children().remove();
        data.forEach(function(value, chave){
            console.log(value);
            $("#tabelaClientes").append("<tr>\n" +
                "            <td>"+ value.nome_cliente +"</td>\n" +
                "            <td>"+ value.cpf_cliente +"</td>\n" +
                "            <td><input class='editarCliente'" +
                "                   data-id='"+ value.id +"'" +
                "                   data-nomecliente='"+ value.nome_cliente +"'" +
                "                   data-cpfcliente='"+ value.cpf_cliente +"'" +
                "                   type='button' value='Editar'/></td>\n" +
                "            <td><input class='removerCliente' data-id='"+ value.id +"' type='button' value='Excluir'/></td>\n" +
                "        </tr>")
        });
    });

});

$(document).on("click", ".removerCliente", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover esse Cliente",
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
            removeCliente(id);
        }
    });
});

function removeCliente(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/removeClientes",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Cliente removido com sucesso", "", "success").then(function (value) {
                //location.reload();
            });
        } else {
            swal("Não foi possivel remover o Cliente", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover o Cliente", "", "error");
    })
}
