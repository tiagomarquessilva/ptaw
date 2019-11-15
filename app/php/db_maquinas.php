<?php
    include "db_verificar.php";
    include "db_connection.php";

    $result = pg_query($db, "SELECT clientes.nome as cliente, maquinas.id as idMaquina, maquinas.localizacao as morada, 
    distritos.nome as distrito, maquinas.estado 
    FROM ((maquinas 
    INNER JOIN clientes ON clientes.id = maquinas.id_empresa_atribuida)
    INNER JOIN distritos ON distritos.cod_postal = maquinas.cod_postal) WHERE maquinas.is_active = true;") 
    or die('Query Failed: ' . pg_last_error());

    echo json_encode(pg_fetch_all($result));