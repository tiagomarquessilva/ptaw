<?php 
include "db_verificar.php";
include "db_connection.php";

$uid = isset($_POST['userID']) ? $_POST['userID'] : '';

$query1 = pg_query_params($db,"UPDATE maquinas SET id_empresa_atribuida = NULL WHERE id = $1;", array($uid)) or die('Query Failed: ' . pg_last_error());

?>
