<?php

include "db_connection.php";
include "db_verificar.php";

$result = pg_query_params($db, "UPDATE pedidosdeapoio
    SET estado = 3, data_resolucao = current_timestamp(0)::timestamp
    WHERE id = $1;", array($_POST["id"]));
