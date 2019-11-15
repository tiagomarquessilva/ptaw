<?php 

    include "db_connection.php"; 
    include "db_verificar.php";
    
    $result = pg_query($db,"SELECT maquinas.id as num FROM maquinas WHERE is_active = true ORDER BY ID DESC LIMIT 1;") or die ('Query Failed: ' . pg_last_error());
    
    echo json_encode(pg_fetch_all($result));

?>
