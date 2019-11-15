<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
if ($_SESSION["trabalhador_empresa_mae"] != "t") {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="js/call.html">
    <link href="css/mystyle.css" rel="stylesheet">

</head>

<body>


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu" class="nav navbar-nav">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg" />
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo $_SESSION['nome'] ?></span>
                            <span class="text-muted text-xs block">Administrador <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="perfil_administrador.php" <?php if ($active == "Perfil") echo "class='active'"; ?>>Perfil</a></li>
                            <li><a class="dropdown-item" href="php/logout.php">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        VG
                    </div>
                </li>

                <li>
                    <a href="dashboard.php" <?php if ($active == "Dashboard") echo "class='active'"; ?>><i class="fa fa-home"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="clientes.php" <?php if ($active == "Clientes") echo "class='active'"; ?>><i class="fa fa-user"></i> <span class="nav-label">Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="pedidoapoio.php" <?php if ($active == "PedidosApoio") echo "class='active'"; ?>><i class="fa fa-envelope"></i> <span class="nav-label">Pedidos de Apoio</span>
                    </a>
                </li>
                <li>
                    <a href="maquinas.php" <?php if ($active == "Maquinas") echo "class='active'"; ?>><i class="fa fa-desktop"></i> <span class="nav-label">Máquinas</span>
                    </a>
                </li>
                <li>
                    <a href="estatisticas.php" <?php if ($active == "Estatisticas") echo "class='active'"; ?>><i class="fa fa-bar-chart-o"></i><span class="nav-label">Estatísticas</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php" <?php if ($active == "Admin") echo "class='active'"; ?>><i class="fa fa-adn"></i><span class="nav-label">Administrador</span>
                    </a>
                </li>
            </ul>

        </div>
    </nav>
    
</body>

</html>