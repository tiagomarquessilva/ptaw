<?php
    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query_params($db, "SELECT pedidosdeapoio.id AS id, estados_pedidos.nome AS estado, assunto, tipos_pedidos.nome AS tipo, data_envio
    FROM pedidosdeapoio
    INNER JOIN tipos_pedidos ON tipos_pedidos.id = pedidosdeapoio.tipo
    INNER JOIN estados_pedidos ON estados_pedidos.id = pedidosdeapoio.estado
    WHERE id_queixoso = $1
    Order by estados_pedidos.id ASC, data_envio desc;", array($_SESSION["id_empresa_cliente"]))
    or die('Query Failed: ' . pg_last_error());
    
    $json = pg_fetch_all($result);

    if( $json == TRUE ){
        echo json_encode($json);
    } else {
        echo json_encode(array());
    }

?>