<?php

    include "db_connection.php";
    include "db_verificar.php";
    $result = pg_query_params($db, "SELECT distritos.nome as distrito, clientes.nome as cliente, maquinas.id as idMaquina, maquinas.estado 
    FROM maquinas 
    INNER JOIN clientes ON clientes.id = maquinas.id_empresa_atribuida
    INNER JOIN distritos ON distritos.cod_postal = maquinas.cod_postal
    WHERE maquinas.is_active = true;", array()) 
    or die('Query Failed: ' . pg_last_error());

    echo json_encode(pg_fetch_all($result));

?>