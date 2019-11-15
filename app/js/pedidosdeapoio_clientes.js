function get_pedido_apoio(id_pedido) {
    $.ajax({
        type: "POST",
        url: "php/mensagem.php",
        data: {
            id1: id_pedido
        },
        success: function (data) {
            var modal = JSON.parse(data);
            $('#data').html(modal.data);
            $('#tipo').html(modal.tipo);
            $('#data_atual').html(modal.data_atual);
            $("#myModal").modal();
            // Carregar msg
            if (modal.mensagens == false) {
                var chat = document.getElementById("chat");
                chat.innerHTML = "";
            } else {
                var mensagens = document.createDocumentFragment();
                for (element of modal.mensagens) {
                    var div = document.createElement("div");
                    div.classList.add("chat-message");
                    if (element.trabalhador_empresa_mae == 't') {
                        div.classList.add("right");
                        div.innerHTML = '<div class="message"><a class="message-author">Vendigas</a><span class="message-date">' + element.data_envio + '</span><hr><span class="message-content">' + element.info + '</span></div>';
                    } else {
                        div.classList.add("left");
                        div.innerHTML = '<div class="message navy-bg"><a class="message-author">' + element.admin + '</a><span class="message-date" style="color:white;">' + element.data_envio + '</span><hr style="border:1px solid white;"><span class="message-content">' + element.info + '</span></div>';
                    }
                    mensagens.appendChild(div);
                };
                var chat = document.getElementById("chat");
                chat.innerHTML = "";
                chat.appendChild(mensagens);
                chat.scrollTop = chat.scrollHeight;
            }
        },
        error: function () {
            console.log('Erro a obter pedidos');
        }
    });
}

$(document).ready(function () {
    var botoes = function (cell, formatterParams) { //plain text value
        var buttons = document.createElement("div");
        buttons.classList.add("row");
        buttons.classList.add("align-items-center");
        buttons.classList.add("justify-content-center");
        button = document.createElement("button");
        button.classList.add("btn");
        button.classList.add("btn-white");
        button.classList.add("btn-bitbucket");
        button.innerHTML = "<i class='col fa fa-info'></i>";
        button.addEventListener("click", function () {
            id_pedido = cell.getRow().getIndex();
            get_pedido_apoio(id_pedido);
        });
        return button;
    };

    var table = new Tabulator("#pedidos", {
        ajaxURL: "php/get_all_pedidos_clientes.php", //AJAX URL
        ajaxConfig: "GET", // Tipo de Pedido AJAX
        columns: [ //Define Colunas
            {
                title: "#",
                field: "id",
                headerFilter: "input"
            },
            {
                title: "Estado",
                field: "estado",
                headerFilter: "input"
            },
            {
                title: "Assunto",
                field: "assunto",
                headerFilter: "input"
            },
            {
                title: "Tipo de Pedido",
                field: "tipo",
                headerFilter: "input"
            },
            {
                title: "Data",
                field: "data_envio",
                headerFilter: "input"
            },
            {
                title: "Ação",
                headerSort: false,
                sortable: false,
                formatter: botoes,
                align: "center",
            }
        ],
        height: "60vh", // Altura da tabela
        layout: "fitColumns", // Colunas preenchem o tamanho da tabela
        virtualDom: true, // Carrega no html apenas linhas visiveis
        placeholder: "Sem Dados Disponíveis", // Mensagem sem dados
        tooltips: true, // Mostra tooltips
        resizableColumns: true, // Colunas ajustaveis
        tooltipsHeader: true, // Mostra tooltips nos headers
        headerFilterPlaceholder: "Filtrar Coluna..." // Placeholder dos filtros
    });

    style_table_filters("pedidos");

    // CLICKS DO MODAL
    document.getElementById("enviar_msg").addEventListener("submit", function (e) {
        e.preventDefault();
        var msg = document.getElementById("message").value;
        $.ajax({
            url: 'php/responder_mensagem.php',
            type: 'POST',
            data: {
                msg: msg,
                id: id_pedido
            },
            success: function (data) {
                document.getElementById("message").value = "";
                get_pedido_apoio(id_pedido);
            },
            error: function (xhr, status, error) {
                console.log("xhr: " + xhr + "\nstatus: " + status + "\nerror: " + error);
            }
        });
    });
    // NOVO PEDIDO
    $("#novo_pedido").submit(function (e) {
        e.preventDefault();
        var form = document.forms[0];
        $.ajax({
            type: "POST",
            url: "php/enviar_msg.php",
            data: {
                assunto: $("#assunto").val(),
                tipo_pedido: $("#tipo_pedido").val(),
                info: $("#info").val()
            },
            success: function (data) {
                table.replaceData();
                document.getElementById("info").value = "";
                document.getElementById("assunto").value = "";
                document.getElementById("tipo_pedido").value = 1;
                $("#myModal2").modal("toggle");
            },
            error: function () {
                alert('failure');
            }
        });
    });




});