<?php
include 'db_connection.php';
include "db_verificar.php";
include 'mail.php';
$company = isset($_POST['company']) ? $_POST['company'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$number = isset($_POST['number']) ? $_POST['number'] : '';
$nif = isset($_POST['nif']) ? $_POST['nif'] : '';
$codPostal = isset($_POST['codPostal']) ? $_POST['codPostal'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

function insertDB($company, $email, $number, $nif, $codPostal, $address)
{
    $company = $company;
    $email = $email;
    $number = $number;
    $nif = $nif;
    $codPostal = $codPostal;
    $address = $address;

    $query = pg_query("SELECT COUNT(*) AS TOTAL FROM clientes");
    while ($row = pg_fetch_array($query)) {
        $total = $row["total"];
    }
    $total = $total + 1;
    $query1 = " ('$total', '$company', '$email', '$number', '$nif', '$codPostal', '$address') ";

    $insert = pg_query("INSERT INTO clientes (id, nome, email, contacto, nif, cod_postal, morada_sede) VALUES " . $query1);
}

function getID()
{
    $query = pg_query("SELECT COUNT(*) AS TOTAL FROM clientes");
    while ($row = pg_fetch_array($query)) {
        $total = $row["total"] + 1;
    }
    return $total;
}

db_connect();
$id = getID();
insertDB("$company", "$email", "$number", "$nif", "$codPostal", "$address");
sendEmail("$id", "$email", "$company");
