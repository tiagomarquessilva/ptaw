<?php
$host = //SERVER;
$port = //PORT;
$dbname = //DBNAME;
$user = //USERNAME;
$password = //PASSWORD;

$db = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $user .  ' password=' . $password);

if (!$db) {
  echo "Erro : Erro na conexão";
}
