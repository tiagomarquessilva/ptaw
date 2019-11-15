
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendigas - Registro de Cliente</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/plugins/toastr/toastr.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="d-flex justify-content-center">
            <div class="ibox col-5">
                <div class="ibox-title">
                                <h2>Registro de Administrador</h2>
                </div>
                <div class="ibox-content">
                                <form id=registerForm>
                                    <div class="form-group"><label><b>Nome</b></label> <input type="text" name="name" id="name" placeholder="Introduza o nome" class="form-control"></div>
                                    <div class="form-group"><label><b>Email</b></label> <input type="email" name="email" id="email" placeholder="Introduza o email" class="form-control"></div>
                                    <div class="form-group"><label><b>Contacto</b></label> <input type="text" name="phone" id="phone" placeholder="Introduza o contacto" class="form-control"></div>
                                    <div class="form-group"><label><b>Morada</b></label> <input type="text" name="address" id="address" placeholder="Introduza a morada" class="form-control"></div>
                                    <div class="form-group"><label><b>Código Postal</b></label> <input type="text" name="codPostal" id="codPostal" placeholder="Introduza o código postal" class="form-control"></div>
                                    <div class="form-group"><label><b>NIF</b></label> <input type="text" name="nif" id="nif" placeholder="Introduza o nif" class="form-control"></div>
                                    <div class="form-group"><label><b>Palavra-Passe</b></label> <input type="password" name="password" id="password" placeholder="Introduza a palavra-passe" class="form-control"></div>
                                    <button class="btn btn-block btn-primary btn-lg" type="submit" name="submit" id="submit">Registrar</button>
                                </form>
                                <div id=result>
                                </div>
                            </div>
            </div>
        </div>
    </div>

    <?php include "./js/call.html"; ?>
    
    <script src="js/plugins/validate/jquery.validate.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script src="js/register.js"></script>
</body>

</html>