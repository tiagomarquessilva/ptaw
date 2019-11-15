<?php
    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query_params($db, "SELECT clientes.nome FROM clientes
    INNER JOIN administradores 
    ON administradores.id_empresa_cliente = clientes.id  
    WHERE administradores.nome = $1 ", array($_SESSION['nome']))
    or die('Query Failed: ' . pg_last_error());
    $row = pg_fetch_array($result);
    $name = new \stdClass;
    $name->name = $row['nome'];
    
    echo(json_encode($name));
?>