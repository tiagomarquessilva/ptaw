<?php $active = 'Maquinas' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Máquinas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/tabelas.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

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
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Máquinas</h2>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-10"></div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-block btn-primary" type="button" data-toggle="modal" data-target="#myModal">Adicionar Máquina</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                                <form id="maqForm">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Nova Máquina</h4>
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group row"><label class="col-sm-3 col-form-label">ID</label>
                                                                <div class="col-sm-9">
                                                                    <div class="row">
                                                                        <div class="col-md-3" id="num">
                                                                            <input disabled class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Morada</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="morada" id="morada" placeholder="ex: Rua XXX">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Código Postal</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="codPostal" id="codPostal" placeholder="ex: 3860">
                                                                </div>
                                                            </div>
                                                            <div class="form-group  row"><label class="col-sm-3 col-form-label">Latitude</label>

                                                                <div class="col-sm-9"><input type="text" class="form-control" name="latitude" id="latitude" placeholder="ex: 40.8946"></div>
                                                            </div>
                                                            <div class="form-group  row"><label class="col-sm-3 col-form-label">Longitude</label>

                                                                <div class="col-sm-9"><input type="text" class="form-control" name="longitude" id="longitude" placeholder="ex: 8.5466"></div>
                                                            </div>
                                                            <div class="checkbox">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="check">
                                                                    <span class="col-sm-9">Atribuir a empresa</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row"></div>
                                                            <div id="changeCheck">
                                                                <div class="btn-group">
                                                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" id="empresa" name="empresa">Empresa</button>
                                                                    <ul class="dropdown-menu pre-scrollable" style="height:200px;" id="clientes">
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary" name="submit" id="submit">Adicionar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div id="result"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <br>
                                    <div id="maquinas"></div>
                                </div>
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
    <script src="js/plugins/validate/jquery.validate.js"></script>
    <script type="text/javascript" src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/maquinas.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script src="js/add_maquina.js"></script>
</body>

</html>