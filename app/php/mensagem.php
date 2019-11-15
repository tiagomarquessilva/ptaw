<?php
    include "db_connection.php";
    include "db_verificar.php";

    //$id1=filter_input(INPUT_POST, 'id1');
    $id1=$_POST["id1"];

    $result_1= pg_query_params($db, "select tipos_pedidos.nome as tipo, pedidosdeapoio.data_envio as data, mensagens.data as data_atualizada, pedidosdeapoio.id_queixoso as id_cliente
    from pedidosdeapoio
    INNER JOIN tipos_pedidos ON tipos_pedidos.id = pedidosdeapoio.tipo
    left JOIN mensagens ON mensagens.id_pedido_apoio = pedidosdeapoio.id 
    where pedidosdeapoio.id = $1
    order by data_atualizada desc
    limit 1",array($id1));
    
    $result_2 = pg_query_params($db, "select mensagens.corpo_mensagem as info, administradores.nome as admin,administradores.trabalhador_empresa_mae, clientes.nome as clientes, mensagens.data as data_envio
    from mensagens
    INNER JOIN pedidosdeapoio ON pedidosdeapoio.id = mensagens.id_pedido_apoio
    INNER JOIN administradores ON administradores.id = mensagens.id_remetente
    LEFT JOIN clientes ON clientes.id = pedidosdeapoio.id_queixoso
    where mensagens.id_pedido_apoio = $1
    ORDER BY mensagens.data ASC",array($id1));
    
    
    $row = pg_fetch_array($result_1);
    $modal1 = new \stdClass;
    $modal1->id_cliente = $row['id_cliente'];
    $modal1->tipo= $row['tipo'];
    $modal1->data= $row['data'];
    $modal1->data_atual= $row['data_atualizada'];
    $modal1->mensagens= pg_fetch_all($result_2);

    echo(json_encode($modal1));
    
?>