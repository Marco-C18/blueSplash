<?php include_once('conexion.php'); ?>
<?php 
    if ($_POST) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $stock = $_POST['stock'];

        $fecha = new DateTime();
        $imagen = $fecha->getTimestamp()."_".$_FILES['img']['name'];
        $imagenTemporal = $_FILES["img"]['tmp_name'];
        move_uploaded_file($imagenTemporal, "imgMenu/".$imagen);
    
        $conexionObj = new conexionDb();
        $sqlInsert = "INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `precio`, `categoria`, `stock`, `img`) VALUES (NULL, '$nombre', '$descripcion', '$precio', '$categoria', '$stock', '$imagen');";
        $conexionObj->ejecutar($sqlInsert);
    }

  $conexionObj = new conexionDb();
  $sqlGet = "SELECT * FROM `productos`";
  $result = $conexionObj->consultar($sqlGet);

  $listJugos = array();
  $listPostres = array();
  $listPanes = array();

  foreach($result as $plato) {
         if ($plato[4] == "jugos"){
            $listJugos[] = $plato;
         }
         if ($plato[4] == "postres"){

            $listPostres[] = $plato;
         }
         if ($plato[4] == "panes"){

            $listPanes[] = $plato;
         }
    }

    print_r($listJugos[0][0]);
    

?>

<!-- 
    0 = id
    1 = nombre
    2 = descripcion
    3 = precio
    4 = categoria
    5 = stock
    6 = img 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Album
                    </div>
                    <div class="card-body">

                        <h1>AGREGAR PRODUCTOS</h1>
                        <form action="indexE.php" method="post" enctype="multipart/form-data">

                            <br>
                            Nombre del producto:
                            <input class="form-control" type="text" name="nombre">


                            <br>
                            Descripcion del producto:
                            <input class="form-control" type="text" name="descripcion">

                            <br>

                            Precio del producto:
                            <input class="form-control" type="text" name="precio">

                            <br>

                            Categoria del producto:
                            <input class="form-control" type="text" name="categoria">

                            <br>

                            Stock del producto:
                            <input class="form-control" type="text" name="stock">

                            <br>

                            Imagen del producto:
                            <input class="form-control" type="file" name="img">

                            <br>
                            <br>

                            <input class="btn btn-outline-success" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Imagen</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result as $item) { ?>
                            <tr>
                                <td scope="row"><?php echo $item[0]; ?></td>
                                <td scope="row"><?php echo $item[1]; ?></td>
                                <td scope="row"><?php echo $item[2]; ?></td>
                                <td scope="row"><?php echo $item[3]; ?></td>
                                <td scope="row"><?php echo $item[4]; ?></td>
                                <td scope="row"><?php echo $item[5]; ?></td>
                                <td scope="row">
                                    <img width="100" src="imgMenu/<?php echo $item[6]; ?>" alt="">
                                </td>
                                <td scope="row"><a class="btn btn-danger" href="?borrar=<?php echo $proyecto[0];  ?>"
                                        role="button">
                                        Eliminar </a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>