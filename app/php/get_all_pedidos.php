<?php
    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query($db, "select pedidosdeapoio.id as id, clientes.nome as clientes, estados_pedidos.nome as estado, pedidosdeapoio.assunto as assunto, tipos_pedidos.nome as tipo, pedidosdeapoio.data_envio as data
    from pedidosdeapoio
    INNER JOIN clientes ON clientes.id = pedidosdeapoio.id_queixoso
    INNER JOIN tipos_pedidos ON tipos_pedidos.id = pedidosdeapoio.tipo
    INNER JOIN estados_pedidos ON estados_pedidos.id = pedidosdeapoio.estado
    WHERE clientes.is_active = true
    Order by estados_pedidos.id ASC, data desc")
    or die('Query Failed: ' . pg_last_error());
    echo json_encode(pg_fetch_all($result));


?>