<?php
    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query_params($db, "SELECT id as idmaquina, localizacao as morada, distritos.nome as distrito, estado
    FROM maquinas
    INNER JOIN distritos
    ON maquinas.cod_postal = distritos.cod_postal
    WHERE maquinas.id_empresa_atribuida = $1 AND maquinas.is_active = true;", array($_SESSION["id_empresa_cliente"]))
    or die('Query Failed: ' . pg_last_error());

    $json = pg_fetch_all($result);

    if( $json == TRUE){
        echo json_encode($json);
    } else {
        echo json_encode(array());
    }

?>