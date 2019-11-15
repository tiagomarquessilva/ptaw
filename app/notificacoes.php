<?php $active = 'Dashboard' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PocketGas - Notificações</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <!-- incluir a sidebar e navbar -->
        <?php include "./sidebar.php"; ?>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "./navbar.php"; ?>

                <div class="wrapper wrapper-content  animated fadeInRight">
                    <div class="row">
                        <div class="col-md-10 col-xs-18 col-sm-24">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h2>Notificações</h2>
                                </div>
                                <div class="ibox-content">
                                    <div class="vote-item">
                                        <a class="botao_aref" data-toggle="modal" data-target="#myModal">
                                            <div class="row">
                                                <div class="col-md-1  col-sm-4 col-xs-6  ">
                                                    <div class="vote-icon align-middle">
                                                        <i class="fa fa-plus pull-left"> </i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4  col-sm-6 col-xs-8">
                                                    <div class="vote-title">
                                                        16/04/2019
                                                    </div>
                                                    <div class="vote-title">
                                                        <h4>Empresa 1</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-5  col-sm-8 col-xs-10">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="vote-item">
                                        <a class="botao_aref" data-toggle="modal" data-target="#myModal">
                                            <div class="row">
                                                <div class="col-md-1  col-sm-4 col-xs-6  ">
                                                    <div class="vote-icon align-middle">
                                                        <i class="fa fa-wrench pull-left"> </i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4  col-sm-6 col-xs-8">
                                                    <div class="vote-title">
                                                        15/04/2019
                                                    </div>
                                                    <div class="vote-title">
                                                        <h4>Empresa 4</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-5  col-sm-8 col-xs-10 ">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="vote-item">
                                        <a class="botao_aref" data-toggle="modal" data-target="#myModal">
                                            <div class="row">
                                                <div class="col-md-1  col-sm-4 col-xs-6  ">
                                                    <div class="vote-icon align-middle">
                                                        <i class="fa fa-minus pull-left"> </i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4  col-sm-6 col-xs-8">
                                                    <div class="vote-title">
                                                        13/04/2019
                                                    </div>
                                                    <div class="vote-title">
                                                        <h4>Empresa 2</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-8 col-xs-10">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="vote-item">
                                        <a class="botao_aref" data-toggle="modal" data-target="#myModal">
                                            <div class="row">
                                                <div class="col-md-1  col-sm-4 col-xs-6">
                                                    <div class="vote-icon align-middle">
                                                        <i class="fa fa-info pull-left"> </i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4  col-sm-6 col-xs-8">
                                                    <div class="vote-title">
                                                        02/04/2019
                                                    </div>
                                                    <div class="vote-title">
                                                        <h4>Empresa 3</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-8 col-xs-10">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                        <h4 class=""><b>Pedido de apoio</b></h4>
                        <hr>

                        <div class="row">
                            <div class="col-sm-4"><b>Data de submissão</b></div>
                            <div class="col-sm-4"><b>Última atualização</b></div>
                            <div class="col-sm-4"><b>Tipo de pedido</b></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">2019-04-04</div>
                            <div class="col-sm-4">Ontem</div>
                            <div class="col-sm-4">Instalação</div>
                        </div>
                    </div>

                    <div class="chat-discussion">
                        <div class="chat-message right">

                            <div class="message">
                                <a class="message-author" href="#"> Empresa 1 </a>

                                <span class="message-content">
                                    A nossa empresa gostaria de adquirir uma nova máquina na zona de aveiro. Queriamos saber se vai ser
                                    necessário instalar uma máquina de origem ou
                                </span>
                            </div>
                        </div>
                        <div class="chat-message left">

                            <div class="message">
                                <a class="message-author" href="#"> Carlos(Admin) </a>

                                <span class="message-content">
                                    Neste não existem máquinas não atribuidas mas é possível instalar onde você desejar.
                                </span>
                            </div>
                        </div>
                        <div class="chat-message right">

                            <div class="message">
                                <a class="message-author" href="#"> Empresa 1 </a>

                                <span class="message-content">
                                    Quanto tempo demora a instalar uma nova máquina?
                                </span>
                            </div>
                        </div>
                        <div class="chat-message left">

                            <div class="message">
                                <a class="message-author" href="#"> Carlos(Admin) </a>

                                <span class="message-content">
                                    2 meses
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <h3>Deixe a sua mensagem </h3>
                        <div class="chat-message-form">
                            <div class="form-group">
                                <textarea class="form-control message-input" name="message" placeholder="Enter message text"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Marcar como resolvido</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <?php include "./js/call.html"; ?>
</body>

</html>