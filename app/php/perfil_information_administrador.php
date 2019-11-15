<?php
include 'db_connection.php';
include "db_verificar.php";

$function = isset($_POST['function']) ? $_POST['function'] : '';
$id = $_SESSION["id"];
$company= isset($_POST['company']) ? $_POST['company'] : '';
$email= isset($_POST['email']) ? $_POST['email'] : '';
$nif= isset($_POST['nif']) ? $_POST['nif'] : '';
$number= isset($_POST['number']) ? $_POST['number'] : '';
$address= isset($_POST['address']) ? $_POST['address'] : '';
$codPostal= isset($_POST['codPostal']) ? $_POST['codPostal'] : '';


if ($function == "getInformation") {
    getInformation($id); 
} else {
    updateInformation($id);
}

function getInformation($id)
{
    $query = pg_query("SELECT * FROM administradores WHERE id = ".$id);
        while($row = pg_fetch_array($query)){
            $total = $row[0] . "," . $row[1] . "," . $row[2] . "," . $row[3] . "," . $row[4] . "," . $row[5] . "," . $row[6] . "," . $row[7];
            }
        echo $total;
        return $total;
}
function updateInformation($id)
{
    $query = pg_query("UPDATE administradores
    SET email= '".$GLOBALS['email']."',
    nome= '".$GLOBALS['company']."',
    contacto= '".$GLOBALS['number']."',
    morada= '".$GLOBALS['address']."',
    cod_postal= '".$GLOBALS['codPostal']."',
    nif= '".$GLOBALS['nif']."'
    WHERE id = '".$GLOBALS['id']."'");
}
?>