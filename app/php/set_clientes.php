<?php
include 'db_connection.php';
include "db_verificar.php";
$id2 = isset($_POST['id2']) ? $_POST['id2'] : '';
$result = pg_query_params($db, "SELECT nome FROM clientes WHERE id = $1", array($id2));
$row = pg_fetch_assoc($result);
$_SESSION["id_cliente"] = $id2;
$_SESSION["name_cliente"] = $row["nome"];
echo($_SESSION["name_cliente"]);
 ?>