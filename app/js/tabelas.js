function style_table_filters(id_tabela) {
    var filtros_input = document.getElementById(id_tabela).getElementsByTagName("input");
    for(filtro_input of filtros_input){
        filtro_input.classList.add("form-control");
    }
    var filtros_select = document.getElementById(id_tabela).getElementsByTagName("select");
    for(filtro_select of filtros_select){
        filtro_select.classList.add("form-control");
        filtro_select.classList.add("filter_select");
    }
}