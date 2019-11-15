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
                    <button type="button" class="btn btn-white" id="btn_onoff"></button>
                    <button type="button" class="btn btn-white" data-dismiss="modal" id="resolvido">Marcar como Resolvido</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal para escolher empresa -->
<div class="modal fade" id="atribuir_maquina" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Escolher Maquina</h4>
            </div>
            <div class="modal-body">
                <div id="maquinas_ativar"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white cancelar_maquina" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para desativar máquina -->
<div class="modal fade" id="desativar_maquina" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Escolher Máquina</h4>
            </div>
            <div class="modal-body">
                <div id="maquinas_desativar"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white cancelar_maquina" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>