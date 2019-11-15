<?php

    include "db_connection.php";
    include "db_verificar.php";

    $result= pg_query_params($db, "INSERT INTO public.mensagens(
	 corpo_mensagem, id_remetente, id_pedido_apoio, lida)
	VALUES ($1, $2, $3, false);",array($_POST["msg"], $_SESSION["id"], $_POST["id"]));
    