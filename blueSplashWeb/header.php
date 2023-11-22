<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/blueSplashWeb/css/header.css">
    <script src="https://kit.fontawesome.com/ce1f647d5d.js" crossorigin="anonymous"></script>
    <title>header</title>
</head>
<header>
    <div class="hd1">
        <label for="check">
            <a>
                <i class="fa-solid fa-bars"></i>
            </a>
        </label>
        <div class="img">
            <img src="img/icon.png">
        </div>
        <a href="#" class="user">
            <i class="fa-solid fa-user"></i>
        </a>
    </div>
    <div id="miPedido" class="hd2">
        <a class="pedido" href="#">
            <p>Pedir online</p>
        </a>
    </div>
</header>

<body>

    <input type="checkbox" id="check">
    <div id="categoryMenu" class="categoryMenu">
        <label for="check">
            <i class="fa-solid fa-x" id="closeMenu"></i>
        </label>
        <ul>
            <li><a id="Inicio" href="home.php">Inicio</a></li>
            <li><a id="Historia" href="historia.php">Historia</a></li>
            <li><a id="Menu" href="menu.php">Menú</a></li>
            <li><a id="Pedidos" href="pedido.php">Pedidos</a></li>
            <li><a id="Lugares" href="lugares.php">Lugares</a></li>

        </ul>
    </div>