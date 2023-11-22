<?php 
include_once( 'conexion.php' );
include_once( 'header.php' );
?>
<?php
session_start();
if ( $_POST ) {

    if ( isset( $_POST[ 'add' ] ) ) {
        $precioF = intval( $_POST[ 'precio' ]) * intval( $_POST[ 'cantidad' ]);
        $sesion_array = array(
            'name' => $_POST[ 'name' ],
            'cantidad' => $_POST[ 'cantidad' ],
            'precio' => strval($precioF),
        );

        $_SESSION[ 'cart' ][] = $sesion_array;
    }
    
    if ( isset( $_POST[ 'delete' ] ) ) {
        unset($_SESSION['cart'][$_POST[ 'id' ]]);
    }

}

$conexionObj = new conexionDb();
$sqlGet = 'SELECT * FROM `productos`';
$result = $conexionObj->consultar( $sqlGet );

$listJugos = array();
$listPostres = array();
$listPanes = array();

foreach ( $result as $plato ) {
    if ( $plato[ 4 ] == 'jugos' ) {
        $listJugos[] = $plato;
    }
    if ( $plato[ 4 ] == 'postres' ) {
        $listPostres[] = $plato;
    }
    if ( $plato[ 4 ] == 'panes' ) {
        $listPanes[] = $plato;
    }
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/blueSplashWeb/css/pedido.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>

<body>
    <div class="separador"><p></p></div>
    <div class='container-fluid'>
        <div class='col-md'>
            <div class='row'>
                <div class='col-md-6'>
                    <h2 class='text-center'>MENU</h2>
                    <div class='col-md-12'>
                        <h2>Jugos</h2>
                        <div class='row'>
                            <?php foreach ( $listJugos as $item ) { ?>
                            <div class='col-6'>
                                <form class="card" action='pedido.php' method='post'>
                                    <div class="imgContM">
                                        <img class="card-img-top" src="imgMenu/<?php echo $item[6]; ?>">
                                    </div>
                                    <p><?php echo $item[ 1 ];?></p>
                                    <p class="contentP"><?php echo $item[ 2 ];?></p>

                                    <p class="precioText"> S/. <?php echo $item[ 3 ];?></p>

                                    <input type='hidden' name='name' value="<?php echo $item[1]; ?>">
                                    <input type='hidden' name='precio' value="<?php echo $item[3]; ?>">
                                    <div class="contBtns">
                                        <input type='number' name='cantidad' value='1' class='form-control'>

                                        <input class='btn btn-primary' name='add' type='submit' value='Agregar'>
                                    </div>
                                </form>
                            </div>
                            <?php }?>
                        </div>
                        <h2>Panes</h2>
                        <div class='row'>
                            <?php foreach ( $listPanes as $item ) { ?>
                            <div class='col-6'>
                                <form class="card" action='pedido.php' method='post'>
                                    <div class="imgContM">
                                        <img class="card-img-top" src="imgMenu/<?php echo $item[6]; ?>">
                                    </div>
                                    <p><?php echo $item[ 1 ];?></p>
                                    <p class="contentP"><?php echo $item[ 2 ];?></p>

                                    <p class="precioText"> S/. <?php echo $item[ 3 ];?></p>

                                    <input type='hidden' name='name' value="<?php echo $item[1]; ?>">
                                    <input type='hidden' name='precio' value="<?php echo $item[3]; ?>">
                                    <div class="contBtns">
                                        <input type='number' name='cantidad' value='1' class='form-control'>

                                        <input class='btn btn-primary' name='add' type='submit' value='Agregar'>
                                    </div>
                                </form>
                            </div>
                            <?php }?>
                        </div>

                        <h2>Postres</h2>
                        <div class='row'>
                            <?php foreach ( $listPostres as $item ) { ?>
                            <div class='col-6'>
                                <form class="card" action='pedido.php' method='post'>
                                    <div class="imgContM">
                                        <img class="card-img-top" src="imgMenu/<?php echo $item[6]; ?>">
                                    </div>
                                    <p><?php echo $item[ 1 ];?></p>
                                    <p class="contentP"><?php echo $item[ 2 ];?></p>

                                    <p class="precioText"> S/. <?php echo $item[ 3 ];?></p>

                                    <input type='hidden' name='name' value="<?php echo $item[1]; ?>">
                                    <input type='hidden' name='precio' value="<?php echo $item[3]; ?>">
                                    <div class="contBtns">
                                        <input type='number' name='cantidad' value='1' class='form-control'>

                                        <input class='btn btn-primary' name='add' type='submit' value='Agregar'>
                                    </div>
                                </form>
                            </div>
                            <?php }?>
                        </div>
                        
                    </div>
                </div>
                <div class='col-md-4'>
                    <h2 class='text-center'>AGREGADOS</h2>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($_SESSION['cart'] as $id => $proyecto) { ?>
                                <tr>
                                    <td scope="row"><?php echo $proyecto['name']; ?></td>
                                    <td><?php echo $proyecto['cantidad']; ?></td>
                                    <td><?php echo $proyecto['precio']; ?></td>
                                    <td>
                                        <form class="agrBtn" action="pedido.php" method="post">
                                            <input type='hidden' name='id' value="<?php echo $id; ?>">
                                            <input class='btn btn-danger' name='delete' type='submit' value='Eliminar producto'>
                                        </form>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                        <form class="agrBtn" action="pedido.php" method="post">
                                            <!-- <input type='hidden' name='id' value="<?php echo $id; ?>"> -->
                                            <input class='btn btn-success' name='buy' type='submit' value='Finalizar compra'>
                        </form>

                </div>
            </div>
        </div>
    </div>



</body>

</html>