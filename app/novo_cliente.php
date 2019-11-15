<?php
$active = "Clientes";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Novo Cliente</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
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
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Novo Cliente</h2>
                                <p>Registo de conta de nova empresa cliente</p>
                            </div>
                            <div class="ibox-content">
                                <form id="mailForm">
                                    <div class="form-group"><label><b>Nome da Empresa</b></label> <input type="text" name="company" id="company" placeholder="Introduza o nome da empresa" class="form-control"></div>
                                    <div class="form-group"><label><b>NIF</b></label> <input type="text" name="nif" id="nif" placeholder="Introduza o NIF" class="form-control"></div>
                                    <div class="form-group"><label><b>Contacto</b></label> <input type="text" name="number" id="number" placeholder="Introduza o contato" class="form-control"></div>
                                    <div class="form-group"><label><b>Email da empresa</b></label> <input type="email" name="email" id="email" placeholder="Introduza o email da empresa" class="form-control"></div>
                                    <div class="form-group"><label><b>Email do 1º administrador</b></label> <input type="email" name="email_admin" id="email_admin" placeholder="Introduza o email do 1º administrador" class="form-control"></div>
                                    <div class="form-group"><label><b>Morada</b></label> <input type="text" name="address" id="address" placeholder="Introduza a morada" class="form-control"></div>
                                    <div class="form-group"><label><b>Código Postal</b></label> <input type="text" name="codPostal" id="codPostal" placeholder="Introduza o código postal" class="form-control"></div>
                                    <button class="btn btn-primary btn-lg" type="submit" name="submit" id="submit">Submeter</button>
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
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script src="js/novo_cliente.js"></script>
</body>

</html>