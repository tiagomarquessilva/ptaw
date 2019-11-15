// Tabela
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
var the_Function = function () { //plain text value
    button = document.createElement("button");
    button.classList.add("btn");
    button.classList.add("btn-white");
    button.classList.add("btn-bitbucket");
    button.innerHTML = "<i class='fa fa-times'></i>";
    button.addEventListener("click", function () {
        alert("Funciona crl!");
        cell.getRow().delete();
    });
    return button;


    //return "<button class='btn btn-white btn-bitbucket'><i class='fa fa-times'></i></button>";
};

//Criar tabela 
var table = new Tabulator("#maquinas", {
    initialSort: [{
            column: "estado",
            dir: "desc"
        }, //sort by this first

    ],
    ajaxURL: "php/get_cliente_maquinas.php", //AJAX URL
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
            headerFilter: "input"
        },
        {
            title: "Estado",
            field: "estado",
            align: "center",
            formatter: "trafficLight",
            headerFilter: "input"
        }
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

style_table_filters("maquinas");

// Gráfico
$.ajax({
    url: "php/distrito_clientes.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
        var nomes = [];
        var numeros = [];
        data.forEach(element => {
            nomes.push(element.nome);
            numeros.push(element.count);
        });

        var ctxD = document.getElementById("nmaquinas").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'horizontalBar',
            data: {
                labels: nomes,
                datasets: [{
                    label: ["Número de máquinas"],
                    data: numeros,
                    backgroundColor: ["#a3e1d4", "#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4","#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4","#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4","#a3e1d4","#a3e1d4", "#a3e1d4"],
                }]
            },
            options: {
                responsive: true,
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    },
    error: function (data) {
        console.log(data);
    }
});

// Mapa
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

});