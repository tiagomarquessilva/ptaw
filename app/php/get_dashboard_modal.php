<?php

    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query($db, "SELECT maquinas.id as idMaquina, distritos.nome as distrito, maquinas.localizacao as morada, maquinas.latitude as latitude, maquinas.longitude as longitude 
    FROM (maquinas INNER JOIN distritos ON distritos.cod_postal = maquinas.cod_postal) WHERE maquinas.id_empresa_atribuida IS NULL AND maquinas.is_active = true;") 
    or die('Query Failed: ' . pg_last_error());

    echo json_encode(pg_fetch_all($result));

?>