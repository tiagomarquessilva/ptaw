<?php
include "db_connection.php";
include "db_verificar.php";
header('content-type: application/json; charset=utf-8');

$result = pg_query($db, "SELECT distritos.nome, COUNT(maquinas.cod_postal) 
FROM maquinas 
RIGHT JOIN distritos 
ON distritos.cod_postal = maquinas.cod_postal 
WHERE maquinas.is_active = true
GROUP BY distritos.nome 
ORDER By nome;");

// $data = array();
// while ($row = pg_fetch_assoc($result)) {
//     $data[] = $row;
// }
echo json_encode(pg_fetch_all($result));
?>