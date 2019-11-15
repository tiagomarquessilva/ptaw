<?php

include "db_connection.php";
include "db_verificar.php";
header('content-type: application/json; charset=utf-8');

$result = pg_query_params($db, "SELECT distritos.nome, COUNT(maquinas.cod_postal) 
FROM (
	SELECT cod_postal
	FROM maquinas
	WHERE id_empresa_atribuida = $1 AND is_active = true
) as maquinas
RIGHT JOIN distritos 
ON distritos.cod_postal = maquinas.cod_postal 
GROUP BY distritos.nome
ORDER By nome;", array($_SESSION["id_empresa_cliente"]));

echo json_encode(pg_fetch_all($result));
?>