<?php 
require_once __DIR__ . '/include/funciones/db.php';



$json = '';

if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    
   
    $nombre = $_POST['nombre' ]       ?? null;
    $apellido = $_POST['apellido' ]   ?? null;
    $email = $_POST['email' ]         ?? null;
    $regalo   =  (int) $_POST['regalo' ]       ?? null;
    $total_pagar = $_POST['total_pagar']    ?? null;
    $fecha = date('Y-m-d H:i:s');

    $camisa_evento  = $_POST['camisa_evento' ] ?? null;
    $paquete        = $_POST['paquete' ]     ?? null;
    $etiquetas      = $_POST['etiquetas' ] ?? null;

    $pedido   = crear_json( $camisa_evento, $etiquetas, $paquete );
    $registro = eventos_json( $_POST['registro'] ?? '');

    try {

        $stmt = $conection->prepare("INSERT INTO registros (nombre, apellido, email, fecha_registro, pedidos, talleres_registro, regalos, total_pagar) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $conection->close();

        header('Location: /validar_registro.php?true=true');

    } catch (Throwable $th) {
        echo $th;
    }
    
}
include './include/template/header.php';
$exitoso = $_GET['true'] ?? null;

?>


<h2>Verificar Pago</h2>

<section class="seccion contenedor">
    <pre>
        <?PHP if( $exitoso ) echo 'Pedido exitoso '; ?>
    </pre>
</section>

<?php 
include './include/template/footer.php';
?>