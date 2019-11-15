<?php

    include "db_connection.php";
    include "db_verificar.php";
    $info=$_POST["info"];
    $tipo_pedido=$_POST["tipo_pedido"];
    $assunto=$_POST["assunto"];

    $result_1= pg_query_params($db, "INSERT INTO public.pedidosdeapoio(
         tipo, id_queixoso, assunto, estado)
        VALUES ($1, $2, $3, 1)
        RETURNING id;",array($tipo_pedido, $_SESSION["id_empresa_cliente"], $assunto));
        
        $row = pg_fetch_array($result_1);

    $result_2= pg_query_params($db, "INSERT INTO public.mensagens(
	 corpo_mensagem, id_remetente, id_pedido_apoio, lida)
	VALUES ($1, $2, $3, false);",array($info, $_SESSION["id"], $row[0]));
    
    

    

    
    
    


    
    
?>