$(function () {

    var usa_map = new Datamap({
        element: document.getElementById("usa_map"),
        responsive: true,
        scope: 'world',
        fills: {
            defaultFill: "#DBDAD6",
            active: "#2BA587"
        },
        geographyConfig: {
            highlightFillColor: '#1C977A',
            highlightBorderWidth: 0
        },
        data: {
            NE: {
                fillKey: "active"
            },
            CA: {
                fillKey: "active"
            },
            NY: {
                fillKey: "active"
            },
        }
    });

    $.ajax({
        url: 'php/get_dashboard_count.php',
        type: 'get',
        dataType: 'json',
        success: function (data) {

            var num = document.createDocumentFragment();
            for (maquina of data) {
                var p = document.createElement("p");
                p.innerHTML = maquina.num;
                num.appendChild(p);
            }
            document.getElementById("num").innerHTML = "";
            document.getElementById("num").appendChild(num);

        },
        error: function (xhr, status, error) {
            console.log("xhr: " + xhr + "\nstatus: " + status + "\nerror: " + error);
        }
    });

});

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

var table = new Tabulator("#avarias", {
    initialSort: [{
            column: "estado",
            dir: "desc"
        }, //sort by this first

    ],
    ajaxURL: "php/get_dashboard_avarias.php", //AJAX URL
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
            title: "Estado",
            field: "estado",
            align: "center",
            formatter: "trafficLight",
        },

    ],
    height: "40vh", // Altura da tabela
    layout: "fitColumns", // Colunas preenchem o tamanho da tabela
    virtualDom: true, // Carrega no html apenas linhas visiveis
    placeholder: "Sem Dados Disponíveis", // Mensagem sem dados
    tooltips: true, // Mostra tooltips
    resizableColumns: false, // Colunas ajustaveis
    tooltipsHeader: true, // Mostra tooltips nos headers
    headerFilterPlaceholder: "Filtrar Coluna..." // Placeholder dos filtros

});

style_table_filters("avarias");

var table = new Tabulator("#zonas", {
    initialSort: [{
            column: "distrito",
            dir: "asc"
        }, //sort by this first

    ],
    ajaxURL: "php/get_dashboard_zonas.php", //AJAX URL
    ajaxConfig: "GET", // Tipo de Pedido AJAX
    columns: [ //Define 
        {
            title: "#",
            field: "idmaquina",
            headerFilter: "input",
        },
        {
            title: "Distrito",
            field: "distrito",
            headerFilter: "input",
        },
        {
            title: "Cliente",
            field: "cliente",
            headerFilter: "input",
        },
        {
            title: "Estado",
            field: "estado",
            align: "center",
            formatter: "trafficLight",
        },

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

style_table_filters("zonas");

var table = new Tabulator("#modal", {
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

style_table_filters("modal");