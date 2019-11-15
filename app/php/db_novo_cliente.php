<?php
    include 'db_connection.php';
    include "db_verificar.php";
    include 'mail.php';
    $company = isset($_POST['company']) ? $_POST['company'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $email_admin = isset($_POST['email_admin']) ? $_POST['email_admin'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $nif = isset($_POST['nif']) ? $_POST['nif'] : '';
    $codPostal = isset($_POST['codPostal']) ? $_POST['codPostal'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';

    $result = pg_query_params($db, 'INSERT INTO clientes (nome, email, contacto, nif, cod_postal, morada_sede) VALUES ($1,$2,$3,$4,$5,$6)', array($company, $email, (int)$number, (int)$nif, 10, $address));
    $count = pg_query("SELECT * FROM clientes");
    $id = pg_numrows($count);

    sendEmail($id+= 1, $email_admin, $company);
?>