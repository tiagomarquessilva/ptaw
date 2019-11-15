<?php
    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query($db, "SELECT clientes.id AS id, clientes.nome AS nome, clientes.morada_sede AS morada_sede, clientes.contacto AS contacto, COUNT(administradores.id) AS nclientes, COUNT(maquinas.id) AS nmaq
    FROM clientes
    LEFT JOIN (SELECT id, id_empresa_cliente FROM administradores WHERE trabalhador_empresa_mae = false AND is_active = true) AS administradores 
    ON administradores.id_empresa_cliente = clientes.id
    LEFT JOIN (SELECT id, id_empresa_atribuida FROM maquinas WHERE is_active = true) AS maquinas 
    ON maquinas.id_empresa_atribuida = clientes.id
    WHERE clientes.is_active = true
    GROUP BY clientes.id
    ORDER BY clientes.id ASC")
    or die('Query Failed: ' . pg_last_error());
    
    echo json_encode(pg_fetch_all($result));
?>