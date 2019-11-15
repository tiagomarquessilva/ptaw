<?php
    include "db_connection.php";
    include "db_verificar.php";

    $tipo = $_SESSION["tipo"];
    $id = (int)$_SESSION["id_cliente"];

    $result = pg_query_params($db, "SELECT pedidosdeapoio.id, estados_pedidos.nome as estado, assunto, data_envio
    FROM pedidosdeapoio
    INNER JOIN estados_pedidos ON estados_pedidos.id = pedidosdeapoio.estado
    WHERE pedidosdeapoio.tipo = $1 AND pedidosdeapoio.id_queixoso = $2
    ORDER BY estado, data_envio", array($tipo, $id))
    or die('Query Failed: ' . pg_last_error());
    
    $json = pg_fetch_all($result);

    if( $json){
        echo json_encode($json);
    } else {
        echo json_encode(array());
    }