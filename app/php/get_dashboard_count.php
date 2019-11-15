<?php

    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query_params($db, "SELECT COUNT(maquinas.id) as num FROM maquinas WHERE maquinas.id_empresa_atribuida IS NULL AND maquinas.is_active = true;", array()) 
    or die('Query Failed: ' . pg_last_error());

    echo json_encode(pg_fetch_all($result));


?>