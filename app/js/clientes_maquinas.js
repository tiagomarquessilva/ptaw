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
    button.innerHTML = "<i class='col fa fa-trash'></i>";
    button.addEventListener("click", function () {
        swal({
                title: "Apagar Máquina?",
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
                    var userID = cell.getRow().getData().idmaquina;
                    $.ajax({
                        type: "POST",
                        url: "php/del_maquina.php",
                        data: {
                            userID: userID
                        },
                        success: function (data) {
                            cell.getRow().delete();
                            swal("Máquina Apagada!", "A máquina selecionada foi apagada com sucesso", "success");
                        }
                    });
                }
            });
    });
    return button;
};

//Criar tabela 
var table = new Tabulator("#clientesmaq", {
    initialSort: [{
            column: "estado",
            dir: "desc"
        }, //sort by this first
    ],
    ajaxURL: "php/get_clientes_maquinas.php", //AJAX URL
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

style_table_filters("clientesmaq");