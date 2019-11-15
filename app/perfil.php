<?php 
session_start(); 
$active = "Clientes";
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendigas - Perfil de Cliente</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/plugins/toastr/toastr.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                            <strong><a href="perfil.php">Perfil de Cliente</a></strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                        <div class="ibox-title">
                        <h2>Perfil</h2>
                        <h3>Cliente</h3>
                        </div>
                            <div class="ibox-content">
                                <div class="col-lg-12">
                                    <div class="row justify-content-end">
                                            <a href="clientes_pedidos_apoio.php" class="btn btn-primary col-lg-2" style="margin:5px;">Ver pedidos</a>
                                            <a href="clientes_maquinas.php" class="btn btn-primary col-lg-2" style="margin:5px;">Listar máquinas</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="jumbotron">
                                        
                                            <div class="col-lg-12">
                                                <h3>Nome da empresa</h3>
                                            </div>
                                            <form id="perfilForm">
                                            <div class="col-lg-12"><input type="text" name="company" id="company" value="Manuel Soluções" class="form-control" required></div>
                                            <br>
                                            <div class="col-lg-12">
                                                <h3>NIF</h3>
                                            </div>
                                            <div class="col-lg-12"><input type="text" name="nif" id="nif" value="256478323" class="form-control" required></div>
                                            <br>
                                            <div class="col-lg-12">
                                                <h3>Contacto</h3>
                                            </div>
                                            <div class="col-lg-12"><input type="text" name="contacto" id="contacto" value="256478323" class="form-control" required></div>
                                            <br>
                                            <div class="col-lg-12">
                                                <h3>E-mail</h3>
                                            </div>
                                            <div class="col-lg-12"><input type="email" name ="email" id="email" value="jm@manuelsol.pt" class="form-control" required></div>
                                            <br>
                                            <div class="col-lg-12">
                                                <h3>Morada</h3>
                                            </div>
                                            <div class="col-lg-12"><input type="text" name="address" id="address" value="Rua da Nascente nº67" class="form-control" required></div>
                                            <br>
                                            <div class="col-lg-12">
                                                <h3>Código Postal</h3>
                                            </div>
                                            <div class="col-lg-12"><input type="text" name="codPostal" id="codPostal" value="3403-134" class="form-control" required></div>
                                            <br>
                                            <div class="col-lg-12">
                                                <button class="btn btn-block btn-primary" type="submit" name="submit" id="submit">Atualizar</button>
                                            </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="jumbotron">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <img src="img/company.jpg" class="img-responsive rounded" alt="company" style="width:100%;height:100%;">
                                                </div>
                                            </div>
                                            <br>
                                            <label for="" align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar dolor ut iaculis gravida. Vivamus in leo at odio venenatis aliquet non id tellus. Nam a volutpat neque. Nunc odio mauris, luctus in dui eget, vehicula feugiat metus. Integer odio risus, tempor ut laoreet ut, cursus vitae lorem.</label>
                                            <br>
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <h3>Receita último mês</h3>
                                                    <hr>
                                                    <h1>132,20€</h1>
                                                    <h3>Total de receita</h3>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="js/plugins/validate/jquery.validate.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script src="js/perfil.js"></script>

</body>

</html>