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
            console.log(chave, value);
        });
    });

});