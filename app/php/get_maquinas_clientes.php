<?php
    include "db_connection.php";
    include "db_verificar.php";

    $result = pg_query($db, "SELECT DISTINCT(clientes.nome) 
    FROM clientes 
    WHERE is_active = true
    ORDER BY nome ASC ")
    or die('Query Failed: ' . pg_last_error());
    
    echo json_encode(pg_fetch_all($result));
?>