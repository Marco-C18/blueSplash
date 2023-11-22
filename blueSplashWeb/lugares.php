<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost/blueSplashWeb/css/lugares.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <section class="lugares">
        <h1>Lugares y Horarios</h1>
        <div class="ubis">
            <p class="ubi1">5099 Av. Petit Thouars, Miraflores, Provincia de Lima</p>
            <p class="ubi2">493 C. 2 de Mayo, Miraflores, Provincia de Lima</p>
            <p class="ubi3">602 Ca. Enrique Palacios, Miraflores, Provincia de Lima</p>
        </div>
        <div class="horario">
            <p>Abierto diario: 8:00 a.m - 20:00 p.m</p>
        </div>
    </section>
    <div class="fondo">

    </div>
    <div class="content">

        <h1 class="logo">Contáctanos</h1>

        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Rellena el formulario y te contáctaremos</h3>
                <form action="">
                    <p>
                        <label>Nombres</label>
                        <input type="text" class="nombres">
                    </p>
                    <p>
                        <label>Apellidos</label>
                        <input type="text" class="apellidos">
                    </p>
                    <p>
                        <label>Email *</label>
                        <input type="email" class="email">
                    </p>
                    <p>
                        <label>Telefono</label>
                        <input type="phone" class="phone">
                    </p>

                    <p class="block">
                        <label>Dejanos un mensaje</label>
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button>
                            ENVIAR
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Mas info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Miraflores</li>
                    <li><i class="fas fa-phone"></i> +51 923757020</li>
                    <li><i class="fas fa-envelope-open-text"></i> bluesplash@gmail.pe</li>
                </ul>
                <p>bluesplash.com</p>
            </div>
        </div>

    </div>


</body>

</html>
<?php include("footer.php"); ?>