<?php $active = 'Clientes' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Máquinas de Cliente</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="css/tabelas.css" rel="stylesheet">
</head>

<body>
    <!--conteudo -->
    <div id="wrapper">
        <!-- incluir a sidebar e navbar -->
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
                            <strong><a href="clientes_maquinas.php">Lista de Máquinas</a></strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Máquinas</h2>
                                <h3><?php echo $_SESSION["name_cliente"] ?></h3>
                            </div>
                            <div class="ibox-content">
                                <div id="clientesmaq"></div>
                            </div>
                            <div class="ibox-footer">
                                <i class="fa fa-circle fa-lg" style="color:red;"></i> - Fora de Serviço &nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-circle fa-lg" style="color:orange;"></i> - Em Manutenção &nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-circle fa-lg" style="color:green;"></i> - Em Serviço
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./js/call.html"; ?>

    <script src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/clientes_maquinas.js"></script>

</body>

</html>