<!-- header - Start -->
<?php include './include/template/header.php' ?>
<!-- header - End -->


<section class="seccion contenedor">
  <h2>Calendario</h2>
  <?php
  try {
    require_once('include/funciones/db.php');

    $query = "SELECT eventos.id, eventos.nombre, eventos.fecha_evento, eventos.hora_evento, tipo_evento.cat_evento as evento, CONCAT(invitados.nombre, invitados.apellido) As invitado ";
    $query .= " FROM eventos INNER JOIN tipo_evento ON eventos.categoria = tipo_evento.id";
    $query .= " JOIN invitados ON eventos.invitado = invitados.id";

    $resultado = $conection->query($query);
    // $evento =  $resultado->fetch_assoc();
    $eventos = [];

    while ($evento = $resultado->fetch_assoc()) {

      $fecha = $evento['fecha_evento'];

      $arreglo_evento = array(
        'titulo' => $evento['nombre'],
        'fecha' => $evento['fecha_evento'],
        'hora' => $evento['hora_evento'],
        'categoria' => $evento['evento'],
        'invitado' => $evento['invitado'],
      );

      $eventos[$fecha][] = $arreglo_evento;
    }
  } catch (\Throwable $th) {
    //throw $th;
  }
  ?>


  <div>
    <?php

    foreach ($eventos as $key => $value) {
    ?>

      <h3 class='fecha-calendario'>
        <i class="fa fa-calendar"></i>
        <?php

        setlocale(LC_TIME, 'spanish');
        echo date('F j, Y', strtotime($key));

        ?>
      </h3>
      <div class="contenedor-dia contenedor">
      <?php foreach ($value as $evento) { ?>

        <div class="dia">
          <p class="titulo"> <?php echo $evento['titulo'] ?></p>
          <p class="hora"> <i class="fa-solid fa-clock"></i> <?php echo $evento['hora'] ?></p>
          <p class="categoria"> <i class="fa fa-code" aeia-hidden = "true "></i> <?php echo $evento['categoria'] ?></p>
          <p class="invitado"><i class="fa fa-user" aeia-hidden = "true "></i> <?php echo $evento['invitado'] ?></p>
        </div>

      <?php } ?>
      </div>
    <?php } ?>

  </div>
</section>

<!-- footer Start -->
<?php
$conection->close();
include './include/template/footer.php';
?>
<!-- footer end -->