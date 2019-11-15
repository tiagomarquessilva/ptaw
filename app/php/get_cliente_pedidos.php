<?php

    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query_params($db, "SELECT tipos_pedidos.id as tipo, COUNT(p.tipo) as num_pedidos
    FROM tipos_pedidos
    LEFT JOIN (
        SELECT * 
        FROM pedidosdeapoio 
        WHERE pedidosdeapoio.id_queixoso = $1) AS p
    ON tipos_pedidos.id = p.tipo
    GROUP BY tipos_pedidos.id
    ORDER BY tipos_pedidos.id;", array($_SESSION["id_cliente"]))
    or die('Query Failed: ' . pg_last_error());
    
    echo json_encode(pg_fetch_all($result));
?>