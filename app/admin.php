<?php $active = 'Admin' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Administração</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <?php include "./sidebar.php"; ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "./navbar.php"; ?>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Lista de Administradores</h2>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-10 input-group">
                                        <input type="text" placeholder="Pesquisa de administradores " class="input form-control">

                                    </div>
                                    <div class="col-lg-2">
                                        <a class="btn btn-block btn-primary" href="novo_admin.php">Novo Administrador</a>
                                    </div>
                                </div>
                                <div class="clients-list">
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                            <div class="full-height-scroll">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <th>#</th>
                                                                <th scope="col">Cliente</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Contacto</th>
                                                                <th scope="col">Remover</th>
                                                            </tr>
                                                            <tr>
                                                                <th> 1</th>
                                                                <td>Alberto Manuel</td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>243465789</td>
                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> 2</th>
                                                                <td><a href="#contact-1" class="client-link">Antonio
                                                                        Manuel</a></td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>245601789</td>

                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> 3</th>
                                                                <td><a href="#contact-1" class="client-link">Luis
                                                                        Antonio</a></td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>214568989</td>

                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> 4</th>
                                                                <td><a href="#contact-1" class="client-link">Antonio
                                                                        Gomes</a></td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>212601703</td>

                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> 5</th>
                                                                <td><a href="#contact-1" class="client-link">Alberto
                                                                        Manuel</a></td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>243465789</td>

                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 6</td>
                                                                <td><a href="#contact-1" class="client-link">Antonio
                                                                        Manuel</a></td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>245601789</td>

                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> 7</th>
                                                                <td><a href="#contact-1" class="client-link">Luis
                                                                        Antonio</a></td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>214568989</td>

                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> 8</th>
                                                                <td><a href="#contact-1" class="client-link">Antonio
                                                                        Gomes</a></td>
                                                                <td>alberto@gmail.com</td>
                                                                <td>212601703</td>

                                                                <td align="center" class="contact-type"><i class="fa fa-times">
                                                                    </i>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
    <?php include "js/call.html"; ?>

</body>

</html>