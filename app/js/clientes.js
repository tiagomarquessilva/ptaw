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
            var id = cell.getRow().getIndex();
            $.ajax({
                type: "POST",
                url: "php/set_clientes.php",
                data: {
                    id2: id
                },
                success: function () {
                    window.location.href = "perfil.php";
                },
                error: function () {
                    alert('failure');
                }
            });
        });
        var button_del = document.createElement("button");
        button_del.classList.add("btn");
        button_del.classList.add("btn-white");
        button_del.classList.add("btn-bitbucket");
        button_del.innerHTML = "<i class='col fa fa-trash'></i>";
        button_del.addEventListener("click", function () {
            swal({
                title: "Apagar Cliente?",
                text: "Esta ação é irreversível!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fa0006",
                confirmButtonText: "Apagar",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false
            },
                function (isConfirm) {
                    if (isConfirm) {
                        var id = cell.getRow().getData().id;
                        $.ajax({
                            type: "POST",
                            url: "php/del_cliente.php",
                            data: {
                                userID: id
                            },
                            success: function (data) {
                                cell.getRow().delete();
                                swal("Cliente Apagado!", "O cliente selecionado foi apagado com sucesso", "success");
                            }
                        });
                    }
                });
        });
        buttons.appendChild(button_info);
        buttons.appendChild(button_del);
        return buttons;

    };

    var table = new Tabulator("#clientes", {
        ajaxURL: "php/get_clientes.php", //AJAX URL
        ajaxConfig: "GET", // Tipo de Pedido AJAX
        columns: [ //Define Colunas
            {
                title: "#",
                field: "id",
                headerFilter: "input"
            },
            {
                title: "Cliente",
                field: "nome",
                headerFilter: "input"
            },
            {
                title: "Sede",
                field: "morada_sede",
                headerFilter: true
                //headerFilterParams: coluna_opcoes()
            },
            {
                title: "Contacto",
                field: "contacto",
                headerFilter: "input"
            },
            {
                title: "Nº de utilizadores",
                field: "nclientes",
                headerFilter: "input"
            },
            {
                title: "Nº de máquinas",
                field: "nmaq",
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
        height: "50vh", // Altura da tabela
        layout: "fitColumns", // Colunas preenchem o tamanho da tabela
        virtualDom: true, // Carrega no html apenas linhas visiveis
        placeholder: "Sem Dados Disponíveis", // Mensagem sem dados
        tooltips: true, // Mostra tooltips
        resizableColumns: true, // Colunas ajustaveis
        tooltipsHeader: true, // Mostra tooltips nos headers
        headerFilterPlaceholder: "Filtrar Coluna...", // Placeholder dos filtros
    });

    style_table_filters("clientes");
    table.replaceData();
});