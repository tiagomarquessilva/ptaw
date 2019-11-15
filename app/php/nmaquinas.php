<?php
include "db_connection.php";
include "db_verificar.php";
$result = pg_query($db, "SELECT clientes.nome, COUNT(maquinas.id) AS nmaq
FROM clientes
LEFT JOIN (SELECT id, id_empresa_atribuida FROM maquinas WHERE is_active = true) 
AS maquinas ON clientes.id = maquinas.id_empresa_atribuida
WHERE clientes.is_active = true
GROUP BY clientes.id
ORDER BY clientes.id ASC")
    or die('Query Failed: ' . pg_last_error());

echo json_encode(pg_fetch_all($result));
