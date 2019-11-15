<?php
include "db_verificar.php";
include "db_connection.php";

$mid = isset($_POST['id_maquina']) ? $_POST['id_maquina'] : '';
$eid =  isset($_POST['id_empresa']) ? $_POST['id_empresa'] : '';

$query1 = pg_query_params($db, "UPDATE maquinas SET id_empresa_atribuida = $1 WHERE id = $2;", array($eid, $mid)) or die('Query Failed: ' . pg_last_error());
