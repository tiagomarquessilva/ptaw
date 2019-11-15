// Definir funções
var id_pedido;
var id_cliente1;

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
            id_cliente1 = modal.id_cliente;
            // Botao de atribuir e desativar 
            $("#btn_onoff").hide();
            $("#btn_onoff").removeClass("modo_instalar");
            $("#btn_onoff").removeClass("modo_desativar");
            if (modal.tipo == "Instalação") {
                $("#btn_onoff").addClass("modo_instalar");
                $("#btn_onoff").html("Atribuir Máquina");
                $("#btn_onoff").show();
            } else if (modal.tipo == "Desativação") {
                $("#btn_onoff").addClass("modo_desativar");
                $("#btn_onoff").html("Desativar Máquina");
                $("#btn_onoff").show();
            }
            // Carregar msg
            if (modal.mensagens == false) {
                var chat = document.getElementById("chat");
                chat.innerHTML = "";
            } else {
                var mensagens = document.createDocumentFragment();
                for (element of modal.mensagens) {
                    var div = document.createElement("div");
                    div.classList.add("chat-message");
                    if (element.trabalhador_empresa_mae == 'f') {
                        div.classList.add("right");
                        div.innerHTML = '<div class="message"><a class="message-author">' + element.clientes + '</a><span class="message-date">' + element.data_envio + '</span><hr><span class="message-content">' + element.info + '</span></div>';

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
        //Botao de info
        var buttons = document.createElement("div");
        buttons.classList.add("row");
        buttons.classList.add("align-items-center");
        buttons.classList.add("justify-content-center");
        var button_info = document.createElement("button");
        button_info.classList.add("btn");
        button_info.classList.add("btn-white");
        button_info.classList.add("btn-bitbucket");
        button_info.innerHTML = "<i class='col fa fa-info'></i>";
        button_info.addEventListener("click", function () {
            id_pedido = cell.getRow().getIndex();
            get_pedido_apoio(id_pedido);
        });
        buttons.appendChild(button_info);
        return buttons;
    };


    var table = new Tabulator("#pedidos_all", {
        ajaxURL: "php/get_all_pedidos.php", //AJAX URL
        ajaxConfig: "GET", // Tipo de Pedido AJAX
        columns: [ //Define Colunas
            {
                title: "#",
                field: "id",
                headerFilter: "input"
            },

            {
                title: "Clientes",
                field: "clientes",
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
                title: "Tipo de pedido",
                field: "tipo",
                headerFilter: "input"
            },
            {
                title: "Data",
                field: "data",
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
        height: "70vh", // Altura da tabela
        layout: "fitColumns", // Colunas preenchem o tamanho da tabela
        virtualDom: true, // Carrega no html apenas linhas visiveis
        placeholder: "Sem Dados Disponíveis", // Mensagem sem dados
        tooltips: true, // Mostra tooltips
        resizableColumns: true, // Colunas ajustaveis
        tooltipsHeader: true, // Mostra tooltips nos headers
        headerFilterPlaceholder: "Filtrar Coluna..." // Placeholder dos filtros

    });
    style_table_filters("pedidos_all");

    // Clicks do Modal
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

    document.getElementById("resolvido").addEventListener("click", function () {
        $.ajax({
            url: 'php/resolver_pedido.php',
            type: 'POST',
            data: {
                id: id_pedido
            },
            success: function (data) {
                table.replaceData();
            },
            error: function (xhr, status, error) {
                console.log("xhr: " + xhr + "\nstatus: " + status + "\nerror: " + error);
            }
        });

    });

    $(document).on("click", ".modo_instalar", function () {
        $("#myModal").modal("toggle");
        $("#atribuir_maquina").modal();

        var botoes = function (cell, formatterParams) { //plain text value
            var buttons = document.createElement("div");
            buttons.classList.add("row");
            buttons.classList.add("align-items-center");
            buttons.classList.add("justify-content-center");
            button = document.createElement("button");
            button.classList.add("btn");
            button.classList.add("btn-white");
            button.classList.add("btn-bitbucket");
            button.innerHTML = "<i class='col fa fa-plus'></i>";
            button.addEventListener("click", function () {
                swal({
                        title: "Atribuir Máquina?",
                        text: "O cliente receberá esta máquina",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#fa0006",
                        confirmButtonText: "Atribuir",
                        cancelButtonText: "Cancelar",
                        closeOnConfirm: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            var id = cell.getRow().getData().idmaquina;
                            $.ajax({
                                type: "POST",
                                url: "php/atribuir_maquina.php",
                                data: {
                                    id_maquina: id,
                                    id_empresa: id_cliente1
                                },
                                success: function (data) {
                                    cell.getRow().delete();
                                    swal("Máquina Atribuida!", "A máquina selecionada foi atribuida com sucesso", "success");
                                }
                            });
                        }
                    });
            });
            return button;
        };

        var table = new Tabulator("#maquinas_ativar", {
            initialSort: [{
                    column: "idmaquina",
                    dir: "asc"
                }, //sort by this first
            ],
            ajaxURL: "php/get_dashboard_modal.php", //AJAX URL
            ajaxConfig: "GET", // Tipo de Pedido AJAX
            columns: [ //Define Colunas
                {
                    title: "#",
                    field: "idmaquina",
                    headerFilter: "input",
                },
                {
                    title: "Morada",
                    field: "morada",
                    headerFilter: "input",
                },
                {
                    title: "Distrito",
                    field: "distrito",
                    headerFilter: "input",
                },
                {
                    title: "Latitude",
                    field: "latitude",
                    headerFilter: "input",
                },
                {
                    title: "Longitude",
                    field: "longitude",
                    headerFilter: "input",
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
            resizableColumns: false, // Colunas ajustaveis
            tooltipsHeader: true, // Mostra tooltips nos headers
            headerFilterPlaceholder: "Filtrar Coluna..." // Placeholder dos filtros
        });

        style_table_filters("maquinas_ativar");

    });

    $(document).on("click", ".modo_desativar", function () {
        $("#myModal").modal("toggle");
        $("#desativar_maquina").modal();
        //Estados das máquinas: 1-verde 2-laranja 3-vermelho 
        Tabulator.prototype.extendModule("format", "formatters", {
            trafficLight: function (cell, formatterParams) {
                var value = "";

                if (cell.getValue() == 1) {
                    value = "<i class='fa fa-circle fa-lg' style='color: #008000;'></i>"
                } else if (cell.getValue() == 2) {
                    value = "<i class='fa fa-circle fa-lg' style='color: #FFA500;'></i>"
                } else if (cell.getValue() == 3) {
                    value = "<i class='fa fa-circle fa-lg' style='color: #FF0000;'></i>"
                }
                return value;
            }
        });

        //Botao para eliminar maquina
        var botoes = function (cell, formatterParams) { //plain text value
            var buttons = document.createElement("div");
            buttons.classList.add("row");
            buttons.classList.add("align-items-center");
            buttons.classList.add("justify-content-center");
            button = document.createElement("button");
            button.classList.add("btn");
            button.classList.add("btn-white");
            button.classList.add("btn-bitbucket");
            button.innerHTML = "<i class='col fa fa-times'></i>";
            button.addEventListener("click", function () {
                swal({
                        title: "Desativar Máquina?",
                        text: "O cliente perderá esta máquina",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#fa0006",
                        confirmButtonText: "Desativar",
                        cancelButtonText: "Cancelar",
                        closeOnConfirm: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            var id = cell.getRow().getData().idmaquina;
                            $.ajax({
                                type: "POST",
                                url: "php/desativar_maquina.php",
                                data: {
                                    userID: id
                                },
                                success: function (data) {
                                    cell.getRow().delete();
                                    swal("Máquina Desativada!", "A máquina selecionada foi desativada com sucesso", "success");
                                }
                            });
                        }
                    });
            });
            return button;
        };

        //Criar tabela 
        var table_desativar = new Tabulator("#maquinas_desativar", {
            initialSort: [{
                    column: "estado",
                    dir: "desc"
                }, //sort by this first
            ],
            ajaxURL: "php/listar_maquinas_clientes.php", //AJAX URL
            ajaxParams: {
                id_cliente: id_cliente1
            }, //ajax parameters
            ajaxConfig: "GET", // Tipo de Pedido AJAX
            columns: [ //Define Colunas
                {
                    title: "#",
                    field: "idmaquina",
                    headerFilter: "input",
                },
                {
                    title: "Cliente",
                    field: "cliente",
                    headerFilter: "input",
                },
                {
                    title: "Morada",
                    field: "morada",
                    headerFilter: "input",
                },
                {
                    title: "Distrito",
                    field: "distrito",
                    headerFilter: "input"
                },
                {
                    title: "Estado",
                    field: "estado",
                    align: "center",
                    formatter: "trafficLight",
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
            resizableColumns: false, // Colunas ajustaveis
            tooltipsHeader: true, // Mostra tooltips nos headers
            headerFilterPlaceholder: "Filtrar Coluna..." // Placeholder dos filtros

        });

        style_table_filters("maquinas_desativar");
    });

    $(document).on("click", "#cancelar_desativar_empresa", function () {
        $("#myModal").modal("toggle");
    });

});