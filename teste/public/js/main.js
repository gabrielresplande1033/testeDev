$("#abrirFormularioCliente").on("click", function() {
    escondeFormularios();
    $("#formCliente").css("display", "inline");
});

$("#abrirFormularioProduto").on("click", function() {
    escondeFormularios();
    $("#formProduto").css("display", "inline");
});

$("#abrirFormularioNota").on("click", function() {
    escondeFormularios();
    $("#formNota").css("display", "inline");
});

$("#abrirListaCliente").on("click", function() {
    escondeFormularios();
    $("#listaCliente").css("display", "inline");
});

$("#abrirListaProduto").on("click", function() {
    escondeFormularios();
    $("#listaProduto").css("display", "inline");
});
$("#abrirListaNota").on("click", function() {
    escondeFormularios();
    $("#listaNota").css("display", "inline");
});
$("#abrirFormularioRelatorioNota").on("click", function() {
    escondeFormularios();
    $("#formRelatorioNota").css("display", "inline");
});

$(document).on("click", ".editarProduto", function () {
    escondeFormularios();
    $("#formProdutoEditar").css("display", "inline");

    var id = $(this).data('id');
    var nomeProduto = $(this).data('nomeproduto');
    var valorProduto = $(this).data('valor');

    $("#nomeProdutoEditar").val(nomeProduto);
    $("#valorProdutoEditar").val(valorProduto);
    $("#idProdutoEditar").val(id);

});

$(document).on("click", ".editarCliente", function () {
    escondeFormularios();
    $("#formClienteEditar").css("display", "inline");

    var id = $(this).data('id');
    var nomeCliente = $(this).data('nomecliente');
    var cpfCliente = $(this).data('cpfcliente');

    $("#idClienteEditar").val(id);
    $("#nomeClienteEditar").val(nomeCliente);
    $("#cpfClienteEditar").val(cpfCliente);

});

function escondeFormularios() {
    $("#paginaInicial").css("display", "none");
    $("#listaNota").css("display", "none");
    $("#formNota").css("display", "none");
    $("#listaProduto").css("display", "none");
    $("#formProduto").css("display", "none");
    $("#listaCliente").css("display", "none");
    $("#formCliente").css("display", "none");
    $("#formProdutoEditar").css("display", "none");
    $("#formRelatorioNota").css("display", "none");
}
