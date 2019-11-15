<?php
// Conexão à BD
include 'db_connection.php';
// Início de sessão
session_start();
header('content-type: application/json; charset=utf-8');

// Leitura dos parâmetros do utilizador via POST

$utilizador = filter_input(INPUT_POST, 'utilizador');
if (!$utilizador) {
    $utilizador = "";
}

$password = filter_input(INPUT_POST, 'password');
if (!$password) {
    $password = "";
}


// Query à BD para verificar da existência do utilizador
$q = "SELECT id, email , password, nome,trabalhador_empresa_mae, id_empresa_cliente  FROM administradores WHERE email= $1 AND password = $2 AND is_active = true";
$result = pg_query_params($db, $q, array($utilizador, md5($password)));
$numRows = pg_num_rows($result);

if ($numRows == 1) {
    // Caso o utilizador exista na BD
    $resultado = pg_fetch_assoc($result);
    $_SESSION["id"] = $resultado['id'];
    $_SESSION["utilizador"] = $utilizador;
    $_SESSION["nome"] = $resultado['nome'];
    $_SESSION["trabalhador_empresa_mae"] = $resultado['trabalhador_empresa_mae'];
    $_SESSION["id_empresa_cliente"] = $resultado['id_empresa_cliente'];

    if ($resultado['trabalhador_empresa_mae'] === "t") {
        $json = array("erro"=>FALSE, "pagina"=>"dashboard.php");
       
    } else {
        $json = array("erro"=>FALSE, "pagina"=>"dashboard_clientes.php");
    }
    
} else {
    // Caso o utilizador não exista na BD
    $json = array("erro"=>TRUE);
    session_destroy();
    // Cas  o o utilizador não exista na BD
    //echo "<br><br><center><b><font color='red'>Ocorreu um erro ao enviar a mensagem!";
    //echo "<script>Alert(' Erro ');</script>";
}
// Conversão para JSON do output 
echo json_encode($json);
?>