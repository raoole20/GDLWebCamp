<!-- header - Start -->
<?php include './include/template/header.php' ?>
<!-- header - End -->


<?php
try {
    require_once('include/funciones/db.php');

    $query     = "SELECT * from invitados";
    $resultado = $conection->query($query);

    $invitados = [];

    while ($invitado = $resultado->fetch_assoc()) {
        $invitados[] = $invitado;
    }
    $i = 1;
} catch (\Throwable $th) {
    //throw $th;
}
?>

<section class="seccion contenedor">
    <h2>Invitados</h2>

    <div  class="invitados contenedor seccion">
        <ul class="list-invitados">
            <?php foreach ($invitados as $invitado) {  ?>
                <li>
                    <div class="invitado">
                        <a class="invitado-info" href="#invitado<?php echo $invitado['id'] ?>">
                            <img src="/img/invitado<?php echo $i++ ?>.jpg" alt="Foto de invitado">
                            <p> <?php echo $invitado["nombre"] . ' ' . $invitado["apellido"] ?> </p>
                        </a>
                    </div>
                </li>
                <div style="display: none;">
                
                <div id="invitado<?php echo $invitado['id'] ?>" class="invitado-info">
                    <p><?php echo $invitado['descripcion']?></p>
                </div>
                </div>
            
            <?php } ?>
        </ul>
    </div>
</section>

<!-- footer Start -->
<?php
$conection->close();
include './include/template/footer.php';
?>
<!-- footer end -->