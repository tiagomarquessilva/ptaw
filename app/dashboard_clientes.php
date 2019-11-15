<?php $active = 'Dashboard' ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/tabelas.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

</head>

<body>

    <!--conteudo -->
    <div id="wrapper">

        <!-- incluir a sidebar e navbar -->
        <?php include "./sidebar_clientes.php"; ?>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "./navbar.php"; ?>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Lista de Máquinas</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div id="maquinas"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Localização das Máquinas</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="col-sm-12">
                                            <div id="usa_map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="botao_aref">
                                    <div class="widget style1 navy-bg">
                                        <div class="row vertical-align">
                                            <div class="col-3">
                                                <i class="fa fa-user fa-3x"></i>
                                            </div>
                                            <div class="col-9 text-right">
                                                <h2>Adicionar Funcionário</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h2>Máquinas por Distrito</h2>
                                </div>
                                <div class="ibox-content">
                                    <div>
                                        <canvas id="nmaquinas" height="400px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./js/call.html"; ?>

    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/plugins/d3/d3.min.js"></script>
    <script src="js/plugins/topojson/topojson.js"></script>
    <script src="js/plugins/datamaps/datamaps.all.min.js"></script>
    <script type="text/javascript" src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/dashboard_clientes.js"></script>

</body>

</html>