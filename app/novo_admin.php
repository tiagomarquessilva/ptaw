<?php $active = 'Admin' ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Novo Administrador</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">

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
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Novo Administrador</h2>
                                <p>Registo de conta de novo Administrador</p>
                            </div>
                            <div class="ibox-content">
                                <form id="mailForm" method="post">
                                    <div class="form-group"><label><b>Nome</b></label> <input type="text" id="nome" placeholder="Introduza o nome" class="form-control"></div>
                                    <div class="form-group"><label><b>NIF</b></label> <input type="text" id="nif" placeholder="Introduza o NIF" class="form-control" data-validation-length="min9"></div>
                                    <div class="form-group"><label><b>Contacto</b></label> <input type="text" id="number" placeholder="Introduza o contato" class="form-control"></div>
                                    <div class="form-group"><label><b>Email</b></label> <input type="email" id="email" placeholder="Enter email" class="form-control"></div>
                                    <div class="form-group"><label><b>Morada</b></label> <input type="text" id="address" placeholder="Introduza a morada" class="form-control"></div>
                                    <div class="form-group"><label><b>Código Postal</b></label> <input type="text" id="codPostal" placeholder="Introduza o código postal" class="form-control"></div>
                                    <button class="btn btn-primary btn-lg" type="submit" name="submit" onclick="sendData();">Submeter</button>
                                </form>
                                <div id=result>
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

</body>

</html>
