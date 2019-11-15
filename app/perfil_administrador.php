<?php
session_start();
$active = "Dashboard";
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
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Perfil</h2>
                                <h3>Administrador</h3>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="jumbotron">
                                            <div class="col-lg-12">
                                                <h3>Nome do Administrador</h3>
                                            </div>
                                            <form id="perfilForm">
                                                <div class="col-lg-12"><input type="text" name="company" id="company" class="form-control" required></div>
                                                <br>
                                                <div class="col-lg-12">
                                                    <h3>NIF</h3>
                                                </div>
                                                <div class="col-lg-12"><input type="text" name="nif" id="nif" class="form-control" required></div>
                                                <br>
                                                <div class="col-lg-12">
                                                    <h3>Contacto</h3>
                                                </div>
                                                <div class="col-lg-12"><input type="text" name="contacto" id="contacto" class="form-control" required></div>
                                                <br>
                                                <div class="col-lg-12">
                                                    <h3>E-mail</h3>
                                                </div>
                                                <div class="col-lg-12"><input type="email" name="email" id="email" class="form-control" required></div>
                                                <br>
                                                <div class="col-lg-12">
                                                    <h3>Morada</h3>
                                                </div>
                                                <div class="col-lg-12"><input type="text" name="address" id="address" class="form-control" required></div>
                                                <br>
                                                <div class="col-lg-12">
                                                    <h3>Código Postal</h3>
                                                </div>
                                                <div class="col-lg-12"><input type="text" name="codPostal" id="codPostal" class="form-control" required></div>
                                                <br>
                                                <div class="col-lg-12">
                                                    <button class="btn btn-block btn-primary" type="submit" name="submit" id="submit">Atualizar</button>
                                                </div>
                                            </form>

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
    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script src="js/perfil_administrador.js"></script>

</body>

</html>