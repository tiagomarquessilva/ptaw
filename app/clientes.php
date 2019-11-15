<?php $active = "Clientes"?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Clientes</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
    <link href="css/tabelas.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
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
                                <h2>Lista de Clientes</h2>
                            </div>
                            <div class="ibox-content">
                                <div class="row justify-content-end">
                                    <div class="col-lg-2">
                                        <a class="btn btn-block btn-primary" href="novo_cliente.php">Novo Cliente</a>
                                    </div>
                                </div>
                                <br>
                                <div id="clientes"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "js/call.html"; ?>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/clientes.js"></script>
</body>

</html>