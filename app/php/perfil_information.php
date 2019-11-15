<?php
include 'db_connection.php';
include "db_verificar.php";
$function = isset($_POST['function']) ? $_POST['function'] : '';
$id = $_SESSION["id_cliente"];
$company= isset($_POST['company']) ? $_POST['company'] : '';
$email= isset($_POST['email']) ? $_POST['email'] : '';
$nif= isset($_POST['nif']) ? $_POST['nif'] : '';
$number= isset($_POST['number']) ? $_POST['number'] : '';
$address= isset($_POST['address']) ? $_POST['address'] : '';
$codPostal= isset($_POST['codPostal']) ? $_POST['codPostal'] : '';

if ($function == "getInformation") {
    $result = pg_query_params($db, "SELECT * FROM clientes WHERE id = $1", array($_SESSION["id_cliente"]));
    $row = pg_fetch_array($result);
    $client = new \stdClass;
    $client->name = $row['nome'];
    $client->email = $row['email'];
    $client->nif = $row['nif'];
    $client->number = $row['contacto'];
    $client->address = $row['morada_sede'];
    $client->cod_postal = $row['cod_postal'];
    echo(json_encode($client));
} else {
    $query = pg_query("UPDATE clientes
    SET nome= '".$GLOBALS['company']."',
    email= '".$GLOBALS['email']."',
    contacto= '".$GLOBALS['number']."',
    nif= '".$GLOBALS['nif']."',
    cod_postal= '".$GLOBALS['codPostal']."',
    morada_sede= '".$GLOBALS['address']."'
    WHERE id = '".$GLOBALS['id']."'");
    echo("então");
}

 ?>