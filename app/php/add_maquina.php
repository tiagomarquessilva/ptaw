<?php
include "db_verificar.php";
include 'db_connection.php';
$morada = isset($_POST['morada']) ? $_POST['morada'] : '';
$codPostal = isset($_POST['codPostal']) ? $_POST['codPostal'] : '';
$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : '';
$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : '';
$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';

$result1 = pg_query_params($db, "SELECT clientes.id as id FROM clientes WHERE clientes.nome = $1", array($empresa)) or die('Query Failed: ' . pg_last_error());
$row1 = pg_fetch_assoc($result1);
$id1 = $row1['id'];

if ($empresa == '') {
    $query = "(1, '$morada', '$codPostal', '$latitude', '$longitude') ";
    $insert = pg_query("INSERT INTO maquinas (estado, localizacao, cod_postal, latitude, longitude) VALUES " . $query);
} else {
    $query = "(1, '$morada', '$codPostal', '$latitude', '$longitude', '$id1') ";
    $insert = pg_query("INSERT INTO maquinas (estado, localizacao, cod_postal, latitude, longitude, id_empresa_atribuida) VALUES " . $query);
}
