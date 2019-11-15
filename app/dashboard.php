<?php $active = 'Dashboard' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
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
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Bem vindo, <?php echo $_SESSION['nome'] ?></h2>
                                        <small>Tem 5 novos pedidos de apoio</small>
                                    </div>
                                    <div class="ibox-content">
                                        <ul class="list-group clear-list m-t">
                                            <a data-toggle="modal" data-target="#myModal">
                                                <li class="list-group-item fist-item">
                                                    <span class="float-right">
                                                        Atribuir máquina
                                                    </span>
                                                    <span class="label label-success">1</span> Empresa 2
                                                </li>
                                            </a>
                                            <a data-toggle="modal" data-target="#myModal">
                                                <li class="list-group-item">
                                                    <span class="float-right">
                                                        Desativar máquina
                                                    </span>
                                                    <span class="label label-info">2</span> Empresa 1
                                                </li>
                                            </a>

                                            <a data-toggle="modal" data-target="#myModal">
                                                <li class="list-group-item">
                                                    <span class="float-right">
                                                        Responder ao pedido
                                                    </span>
                                                    <span class="label label-primary">3</span> Empresa 4
                                                </li>
                                            </a>


                                            <a data-toggle="modal" data-target="#myModal">
                                                <li class="list-group-item ">
                                                    <span class="float-right">
                                                        Atribuir máquina
                                                    </span>
                                                    <span class="label label-success">4</span> Empresa 5
                                                </li>
                                            </a>


                                            <a data-toggle="modal" data-target="#myModal">
                                                <li class="list-group-item">
                                                    <span class="float-right">
                                                        Desativar máquina
                                                    </span>
                                                    <span class="label label-info">5</span> Empresa 3
                                                </li>
                                            </a>


                                            <a data-toggle="modal" data-target="#myModal">
                                                <li class="list-group-item">
                                                    <span class="float-right">
                                                        Responder ao pedido
                                                    </span>
                                                    <span class="label label-primary">6</span> Empresa 2
                                                </li>
                                            </a>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Avarias</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div id="avarias"></div>
                                    </div>
                                    <div class="ibox-footer">
                                        <i class="fa fa-circle fa-lg" style="color:red;"></i> - Fora de Serviço &nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-circle fa-lg" style="color:orange;"></i> - Em Manutenção
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Localização das máquinas</h2>
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
                                <div data-toggle="modal" data-target="#maquina_existente">
                                    <a class="botao_aref">
                                        <div class="widget navy-bg p-xl" style="margin-top:0px; margin-bottom:25px;">
                                            <h2>Número de máquinas por atribuir:</h2>
                                            <h1 id="num" class="display-1"></h1>
                                        </div>
                                    </a>
                                </div>
                                <!-- Modal Maquinas Existentes-->
                                <div class="modal fade bd-example-modal-lg" id="maquina_existente" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" tabindex="-1">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Máquinas por Atribuir</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <div id="modal"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h2>Zonas das Máquinas</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div id="zonas"></div>
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
        </div>
    </div>

    <?php include "./js/call.html"; ?>
    <?php include "modal_pedido.php"; ?>
    <script type="text/javascript" src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/dashboard.js"></script>
    <!-- DataMaps -->
    <script src="js/plugins/d3/d3.min.js"></script>
    <script src="js/plugins/topojson/topojson.js"></script>
    <script src="js/plugins/datamaps/datamaps.all.min.js"></script>

</body>

</html>
