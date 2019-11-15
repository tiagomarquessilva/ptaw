<?php
session_start();
$active = 'Clientes';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - <?php echo $_SESSION["name_cliente"] ?> - Pedidos de Apoio</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/botao_ahref.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">

</head>

<body>

    <div id="wrapper">
        <?php include "./sidebar.php"; ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "./navbar.php"; ?>
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
                            <strong><a href="clientes_pedidos_apoio.php">Pedidos de Apoio</a></strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Pedidos de Apoio</h2>
                                <h3><?php echo $_SESSION["name_cliente"] ?></h3>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <a href="clientes_pedido.php?tipo_pedido=0" class="botao_aref col-lg-4">
                                        <div class="widget gray-bg p-xl">
                                            <h2>Pedidos de Instalação</h2>
                                            <h1 id="num_pedidos_instalacao" class="display-1"></h1>
                                            <p>Pedidos</p>
                                        </div>
                                    </a>
                                    <a href="clientes_pedido.php?tipo_pedido=2" class="botao_aref col-lg-4">
                                        <div class="widget gray-bg p-xl">
                                            <h2>Pedidos de Desativação</h2>
                                            <h1 id="num_pedidos_desativacao" class="display-1"></h1>
                                            <p>Pedidos</p>
                                        </div>
                                    </a>
                                    <a href="clientes_pedido.php?tipo_pedido=1" class="botao_aref col-lg-4">
                                        <div class="widget gray-bg p-xl">
                                            <h2>Pedidos de Manutenção</h2>
                                            <h1 id="num_pedidos_manutencao" class="display-1"></h1>
                                            <p>Pedidos</p>
                                        </div>
                                    </a>
                                    <a href="clientes_pedido.php?tipo_pedido=4" class="botao_aref col-lg-4">
                                        <div class="widget gray-bg p-xl">
                                            <h2>Pedidos de Informação</h2>
                                            <h1 id="num_pedidos_informacao" class="display-1"></h1>
                                            <p>Pedidos</p>
                                        </div>
                                    </a>
                                    <a href="clientes_pedido.php?tipo_pedido=3" class="botao_aref col-lg-4">
                                        <div class="widget gray-bg p-xl">
                                            <h2>Pedidos de Reclamação</h2>
                                            <h1 id="num_pedidos_reclamacao" class="display-1"></h1>
                                            <p>Pedidos</p>
                                        </div>
                                    </a>
                                    <a href="pedidoapoio.php" class="botao_aref col-lg-4">
                                        <div class="widget navy-bg p-xl">
                                            <h2>Total de Pedidos</h2>
                                            <h1 id="num_pedidos_total" class="display-1"></h1>
                                            <p>Pedidos</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./js/call.html"; ?>
    <script src="js/clientes_pedidos_apoio.js"></script>
</body>

</html>