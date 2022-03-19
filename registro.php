<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>

    <!-- Social bar - Start -->
    <?php include './include/template/header.php' ?>
    <!-- Social bar - End -->


    <!-- sesction register -->
    <section class="seccion contenedor">
        <h2>Registro de usuario</h2>
        <form action="validar_registro.php" class="registro" method="post">

            <!-- registro de usuarios -inicio -->
            <div class="registro caja" id="datos_usuarios">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input required type="text" name="nombre" placeholder="Tu nombre" id="nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input required type="text" name="apellido" placeholder="Tu apellido" id="apellido">
                </div>
                <div class="campo">
                    <label for="email">E-mail:</label>
                    <input required type="email" name="email" placeholder="Tu email" id="email">
                </div>
                <div class="error">

                </div>
            </div>
            <!-- registro de usuarios - Fin -->

            <!-- seleccionar paquetes -- inicio -->
            <div class="paquetes" id="paquetes">
                <div class="contenedor">
                    <ul class="lista-precio">
                        <li>
                            <div class="tabla-precio">
                                <h3>Pase por dia</h3>
                                <p class="numero">$30</p>
                                <ul>
                                    <li>Bocadillos Gratis</li>
                                    <li>todas las Conferencias</li>
                                    <li>Todos los talleres</li>
                                </ul>
                                <label for="">Boletos Deseados</label>
                                <input  type="number" name="paquete[undia]" id="pase_pordia" min="0" max="10" placeholder="0">
                            </div>
                        </li>
                        <li class="">
                            <div class="tabla-precio tabla-medio">
                                <h3>Todos los dias</h3>
                                <p class="numero">$50</p>
                                <ul>
                                    <li>Bocadillos Gratis</li>
                                    <li>todas las Conferencias</li>
                                    <li>Todos los talleres</li>
                                </ul>
                                <label for="">Boletos Deseados</label>
                                <input type="number" name="paquete[completo]"  id="pase_completo" min="0" max="10" placeholder="0">
                            </div>
                        </li>
                        <li>
                            <div class="tabla-precio">
                                <h3>Pase por dos Dias</h3>
                                <p class="numero">$40</p>
                                <ul>
                                    <li>Bocadillos Gratis</li>
                                    <li>todas las Conferencias</li>
                                    <li>Todos los talleres</li>
                                </ul>
                                <label for="">Boletos Deseados</label>
                                <input type="number" name="paquete[dosdias]"   id="pase_dosdias" min="0" max="10" placeholder="0">
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- seleccionar paquetes -- fin -->

            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus talleres</h3>
                <div class="caja no-grid">
                    <div id="viernes" class="contenido-dia clearfix ocultar">
                          <h4>Viernes</h4>
                          <div class="grid">
                              <div>
                                  <p>Talleres:</p>
                                  <label><input type="checkbox" name="registro['Talleres'][]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                                  <label><input type="checkbox" name="registro['Talleres'][]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                                  <label><input type="checkbox" name="registro['Talleres'][]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                                  <label><input type="checkbox" name="registro['Talleres'][]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                                  <label><input type="checkbox" name="registro['Talleres'][]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                              </div>
                              <div>
                                  <p>Conferencias:</p>
                                  <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                                  <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                                  <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                              </div>
                              <div>
                                  <p>Seminarios:</p>
                                  <label><input type="checkbox" name="registro['Seminarios'][]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                              </div>
                          </div>
                      </div> <!--#viernes-->


                      <div id="sabado" class="contenido-dia clearfix ocultar">
                          <h4>Sábado</h4>
                          <div class="grid">
                              <div>
                                    <p>Talleres:</p>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                              </div>
                              <div>
                                    <p>Conferencias:</p>
                                    <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                                    <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                                    <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                              </div>
                              <div>
                                    <p>Seminarios:</p>
                                    <label><input type="checkbox" name="registro['Seminarios'][]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                                    <label><input type="checkbox" name="registro['Seminarios'][]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                              </div>
                          </div>
                      </div> <!--#sabado-->
                      <div id="domingo" class="contenido-dia clearfix ocultar">
                          <h4>Domingo</h4>
                          <div class="grid">
                              <div>
                                    <p>Talleres:</p>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                                    <label><input type="checkbox" name="registro['Talleres'][]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                              </div>
                              <div>
                                    <p>Conferencias:</p>
                                    <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                                    <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                                    <label><input type="checkbox" name="registro['Conferencias'][]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                              </div>
                              <div>
                                    <p>Seminarios:</p>
                                    <label><input type="checkbox" name="registro['Seminarios'][]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                                    <label><input type="checkbox" name="registro['Seminarios'][]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                              </div>
                          </div>
                      </div> <!--#domingo-->
                  </div><!--.caja-->
            </div> <!--#eventos-->

            <div id="resumen" class="resumen">
                <h3>Pago y Extras</h3>
                <div class="caja grid-2">
                    <div class="extras">
                        <div class="orden">
                            <label for="camisa_evento">Camisa del evento $10 <small>(Promocion 7% de descuento)</small></label>
                            <input type="number" name="camisa_evento" id="camisa_evento" min="0" placeholder="0" max="3">
                        </div>
                        <div class="orden">
                            <label for="etiquetas">Paquete de etiquetas <small>(HTLM, Css3m JavaScript )</small></label>
                            <input type="number" name="etiquetas" id="etiquetas" min="0" placeholder="0" max="3">
                        </div>

                        <div class="orden">
                            <label for="regalo">Selecione un regalo</label>
                            <select required name="regalo" id="regalo">
                                <option value="" disabled selected>--Selecione un Regalo--</option>
                                <option value="etiqueta">Etiqueta</option>
                                <option value="pulseras">Pulseras</option>
                                <option value="plumas">Plumas</option>
                            </select>
                        </div>
                        <input type="submit" id="calcular" value="Calcular" class="btn">   
                    </div>

                    <div class="total"> 
                        <p>Resumen</p>
                        <div id="lista-productos">

                        </div>
                        <div class="suma-total">

                        </div>
                        <input type="hidden" name="total_pagar" id='input_01' >
                        <input type="submit" id='enviar' value="Aceptar" class="btn" disabled>
                    </div>
                </div>

            </div>

        </form>
    </section>
    <!-- sesction register fin -->

<!-- footer Start -->
<?php include './include/template/footer.php' ?>
<!-- footer end -->