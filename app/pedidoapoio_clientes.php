<?php $active = "PedidosApoio" ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendigas - Pedidos de Apoio</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/tabulator/tabulator.min.css" rel="stylesheet">
    <link href="css/tabelas.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <?php include "./sidebar_clientes.php"; ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "./navbar.php"; ?>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h2>Pedidos de Apoio</h2>
                            </div>
                            <div class="ibox-content">
                                <div class="row justify-content-end">
                                    <div class="col-lg-2">
                                        <button class="btn btn-block btn-primary" type="button" data-toggle="modal" data-target="#myModal2">Novo Pedido Apoio</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal2" role="dialog">
                                            <div class="modal-dialog">
                                                <form id="novo_pedido">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Novo Pedido de Apoio</h4>
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label" for="tipo_pedido">Tipo de Pedido</label>
                                                                <div class="col-sm-8">
                                                                    <select id="tipo_pedido" class="form-control" required>
                                                                        <option value="1">Instalação</option>
                                                                        <option value="2">Manutenção</option>
                                                                        <option value="3">Desativação</option>
                                                                        <option value="4">Reclamação</option>
                                                                        <option value="5">Informação</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Assunto</label>
                                                                <div class="col-sm-8">
                                                                    <input id="assunto" type="text" class="form-control" name="assunto" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Deixe aqui a sua mensagem</label>
                                                                <div class="col-sm-8">
                                                                    <textarea id="info" id="info" cols="30" rows="10" class="form-control" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary" name="submit" id="submit">Enviar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div id="result"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div id="pedidos"></div>
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

                    <h4 class=""><b>Pedido de Apoio</b></h4>
                    <hr>

                    <div class="row">
                        <div class="col-sm-4"><b>Data de Submissão</b></div>
                        <div class="col-sm-4"><b>Última Atualização</b></div>
                        <div class="col-sm-4"><b>Tipo de Pedido</b></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4" id="data"></div>
                        <div class="col-sm-4" id="data_atual"></div>
                        <div class="col-sm-4" id="tipo"></div>
                    </div>
                </div>
                <div class="chat-discussion" id="chat" style=" height: 45vh; overflow: scroll;">
                </div>
                <form id="enviar_msg">
                    <div class="col-lg-12">
                        <h3>Enviar Mensagem:</h3>
                        <div class="chat-message-form">
                            <div class="form-group">
                                <textarea class="form-control message-input" id="message" placeholder="Deixe aqui a sua mensagem..." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "js/call.html"; ?>
    <script type="text/javascript" src="js/plugins/tabulator/tabulator.min.js"></script>
    <script src="js/tabelas.js"></script>
    <script src="js/pedidosdeapoio_clientes.js"></script>
</body>

</html>