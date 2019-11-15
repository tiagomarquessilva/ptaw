<?php
session_start();
// Fim de sessão
session_destroy();
header("Location: ../index.php");
