<!DOCTYPE html>

<?php session_start() ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendigas - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Bem-vindo ao Vendigas</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">

                <div class="ibox-content">
                    <h2 class="font-bold">Autenticação</h2>
                    <div class="form-group">
                        Nome de Utilizador <br>
                        <input type="text" class="form-control" id="utilizador" name="utilizador">
                    </div>
                    <div class="form-group">
                        Palavra-passe <br>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button class="btn btn-primary block full-width m-b" id="login" name="login">Login</button>
                    <div id="msgErro"></div>
                </div>
            </div>

        </div>
    </div>


</body>

</html>
<?php include "./js/call.html"; ?>
<script src="js/login.js"></script>