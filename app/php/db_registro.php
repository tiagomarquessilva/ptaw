<?php
    include 'db_connection.php';
    include "db_verificar.php";
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $nif = isset($_POST['nif']) ? $_POST['nif'] : '';
    $codPostal = isset($_POST['codPostal']) ? $_POST['codPostal'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    $result = pg_query_params($db, 'INSERT INTO administradores (email, password, nome, contacto, morada, cod_postal, nif, trabalhador_empresa_mae, id_empresa_cliente) VALUES ($1,$2,$3,$4,$5,$6,$7,$8,$9)', array($email, md5($password),$name ,(int)$number, $address, $codPostal, (int)$nif, "false", $id));
?>