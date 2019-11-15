<?php
session_start();
// Seleciona a opçáo correta na sidebar
$active = 'Clientes';

// Define o tipo de pedido
$tipos_pedidos = array("Instalação", "Manutenção", "Desativação", "Reclamação", "Informação");

//Guarda o tipo de pedido em sessão
$_SESSION["tipo"] = (int)$_GET["tipo_pedido"] + 1;
?>
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - <?php echo $_SESSION["name_cliente"] ?> - Pedidos de <?php echo $tipos_pedidos[(int)$_GET["tipo_pedido"]] ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/tabelas.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <?php include "sidebar.php"; ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "navbar.php"; ?>
            </div>
            <div class="row border-bottom white-bg">
                <div class="col-lg-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="clientes.php">Lista de Clientes</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="perfil.php">Perfil de Cliente</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="clientes_pedidos_apoio.php">Pedidos de Apoio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <strong><a href="clientes_pedido.php">Pedidos de <?php echo $tipos_pedidos[(int)$_GET["tipo_pedido"]] ?></a></strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h2>Pedidos de <?php echo $tipos_pedidos[(int)$_GET["tipo_pedido"]] ?></h2>
                                <h3> <?php echo $_SESSION["name_cliente"] ?></h3>
                            </div>
                            <div class="ibox-content">
                                <div id="pedidos">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mainly scripts -->
    <?php include "./js/call.html"; ?>
    <?php include "modal_pedido.php" ?>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/tabelas.js"></script>

    <!-- Page-Level Scripts -->
    <script src="js/cliente_pedidos.js"></script>


</body>

</html>