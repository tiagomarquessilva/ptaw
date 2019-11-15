<?php $active = 'Estatisticas' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Estatísticas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
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

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Nº Máquinas por Distrito</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div>
                                            <canvas id="nmaquinas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Nº Máquinas por Cliente</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div>
                                            <div id="maquinas"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Nº Utilizadores por Cliente</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div>
                                            <canvas id="ncliente"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Satisfação do Cliente</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <ul class="list-group clear-list m-t">
                                            <li class="list-group-item">
                                                <span class="float-right" style="padding-top:10px;"><b> Empresa 1</b>
                                                </span>
                                                <h3><b>15</b></h3>
                                                <div class="progress progress-mini" style="width: 60%;">
                                                    <div style="width: 75%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="float-right" style="padding-top:10px;"><b> Empresa 2</b>
                                                </span>
                                                <h3><b>18</b></h3>
                                                <div class="progress progress-mini" style="width: 60%;">
                                                    <div style="width: 85%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="float-right" style="padding-top:10px;"><b> Empresa 3</b>
                                                </span>
                                                <h3><b>10</b></h3>
                                                <div class="progress progress-mini" style="width: 60%;">
                                                    <div style="width: 50%;" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="float-right" style="padding-top:10px;"><b> Empresa 4</b>
                                                </span>
                                                <h3><b>4</b></h3>
                                                <div class="progress progress-mini" style="width: 60%;">
                                                    <div style="width: 20%;" class="progress-bar progress-bar-danger"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="float-right" style="padding-top:10px;"><b> Empresa 5</b>
                                                </span>
                                                <h3><b>19</b></h3>
                                                <div class="progress progress-mini" style="width: 60%;">
                                                    <div style="width: 90%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                        </ul>
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
    <script type="text/javascript" src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/nmaquinas.js"></script>
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/estatisticas.js"></script>
    <!-- <script src="js/demo/chartjs-demo.js"></script> -->
</body>

</html>