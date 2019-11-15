<?php
    include "db_verificar.php";
    include "db_connection.php";

    $result = pg_query_params($db, "SELECT clientes.nome as cliente, maquinas.id as idMaquina, maquinas.localizacao as morada, distritos.nome as distrito, maquinas.estado 
    FROM maquinas
    INNER JOIN clientes ON maquinas.id_empresa_atribuida = clientes.id
    INNER JOIN distritos ON distritos.cod_postal = maquinas.cod_postal
    WHERE maquinas.id_empresa_atribuida = $1 AND maquinas.is_active = true;", array($_SESSION["id_cliente"])) 
    or die('Query Failed: ' . pg_last_error());

    $json = pg_fetch_all($result);

    if( $json){
        echo json_encode($json);
    } else {
        echo json_encode(array());
    }