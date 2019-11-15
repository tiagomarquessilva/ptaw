<?php
    include "db_verificar.php";
    include "db_connection.php";

    $result = pg_query_params($db, "SELECT clientes.nome as cliente, maquinas.id as idMaquina, maquinas.estado 
    FROM maquinas INNER JOIN clientes ON clientes.id = maquinas.id_empresa_atribuida WHERE maquinas.estado >= '2' AND maquinas.is_active = true;", array()) 
    or die('Query Failed: ' . pg_last_error());

    echo json_encode(pg_fetch_all($result));

?>