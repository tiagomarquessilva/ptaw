var table = new Tabulator("#maquinas", {
    ajaxURL: "php/nmaquinas.php", //AJAX URL
    ajaxConfig: "GET", // Tipo de Pedido AJAX
    columns: [ //Define Colunas
        {
            title: "Cliente",
            field: "nome",
            headerFilter: "input"
        },
        {
            title: "Nº de máquinas",
            field: "nmaq",
            headerFilter: "input"
        }
    ],
    height: "45vh", // Altura da tabela
    layout: "fitColumns", // Colunas preenchem o tamanho da tabela
    virtualDom: true, // Carrega no html apenas linhas visiveis
    placeholder: "Sem Dados Disponíveis", // Mensagem sem dados
    tooltips: true, // Mostra tooltips
    resizableColumns: true, // Colunas ajustaveis
    tooltipsHeader: true, // Mostra tooltips nos headers
    headerFilterPlaceholder: "Filtrar Coluna...", // Placeholder dos filtros

});

style_table_filters("maquinas");