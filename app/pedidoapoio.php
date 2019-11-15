<?php $active = 'PedidosApoio' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Pedidos de Apoio</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/tabelas.css" rel="stylesheet">
    

</head>

<body>

    <div id="wrapper">
        <!-- incluir a sidebar e navbar -->
        <?php include "./sidebar.php"; ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "./navbar.php"; ?>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Pedidos de Apoio</h2>
                            </div>
                            <div class="ibox-content">
                                <div id="pedidos_all"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./js/call.html"; ?>
    <?php include "modal_pedido.php"; ?>
    <script type="text/javascript" src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/pedidosdeapoio.js"></script>
</body>

</html>