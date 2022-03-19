
<!-- header - Start -->
<?php include './include/template/header.php' ?>
<!-- header - End -->


  <!-- Section Inicio  -->
  <section class="seccion contenedor">
    <h2>La mejor Conferencia de diseño WEB en español</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique deserunt fuga totam a sint optio, fugit tenetur exercitationem voluptatum blanditiis!</p>
  </section>
  <!-- Section Fin -->

  <!-- Section Programa -->
  <section class="programa"> 
    <div class="contenedor-video">
      <video  autoplay loop poster="/img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4"> 
        <source src="video/video.webm" type="video/webm"> 
        <source src="video/video.ogv" type="video/ogg"> 
      </video>
    </div>
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <?php
          try {
            require_once('include/funciones/db.php');

            $query = "SELECT * FROM tipo_evento ";
            $resultado = $conection->query($query);
        
            $eventos = [];

            while ($evento = $resultado->fetch_assoc()) {
                $eventos[] = $eventos;
            }
          } catch (\Throwable $th) {
            //throw $th;
          }?>
          <nav class="menu-programa">
            <a href="talleres"><i class="fa fa-code"></i>Talleres</a>
            <a href="conferencias"><i class="fa fa-comment"></i>Conferencias</a>
            <a href="seminarios"><i class="fa fa-university"></i>Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ">

            <div class="detalle-evento">
              <h3>HTML5, CSS3, y javaScript</h3>
              <p><i class="fa-solid fa-clock"></i>16:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de Dic</p>
              <p><i class="fa fa-user"></i>Juan Pablo de la Torre Valdez</p>
            </div>

            <div class="detalle-evento">
              <h3>Responsive Web Dising</h3>
              <p><i class="fa-solid fa-clock"></i>16:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 Dic</p>
              <p><i class="fa fa-user"></i>Juan Pablo de la Torre Valdez</p>
            </div>

            <a href="" class="btn">Ver todo</a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Section Programa fin -->



  <!--seccion de invitados - inicio -->
  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="list-invitados">
      <li>
        <div class="invitado">
          <img src="/img/invitado1.jpg" alt="Foto de invitado">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="/img/invitado2.jpg" alt="Foto de invitado">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="/img/invitado3.jpg" alt="Foto de invitado">
          <p>Maria Castro</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="/img/invitado4.jpg" alt="Foto de invitado">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="/img/invitado5.jpg" alt="Foto de invitado">
          <p>Garol Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="/img/invitado6.jpg" alt="Foto de invitado">
          <p>Susan Sanchez</p>
        </div>
      </li>

    </ul>
  </section>
  <!--seccion de invitados - finalizado -->

  <!-- Contador iniciio -->
  <div class="contador ">
      <div class="contenedor">
        <ul class="resumen-evento">
          <li><p class="numero">6</p> Invitados </li>
          <li><p class="numero">15</p> talleres </li>
          <li><p class="numero">3</p> Dias </li>
          <li><p class="numero">9</p> Conferencias </li>
        </ul>
      </div>
  </div>
  <!-- Contador fin -->


  <!-- Tablas de precios --- inicio -->
  <section class="precios seccion">
    <h2>Precios</h2>
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
            <a href="" class="btn hollow line">Comprar</a>
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
            <a href="" class="btn line">Comprar</a>
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
            <a href="" class="btn hollow line">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- Tablas de precios --- fin -->


  <!-- mapa - inicio -->
  <div class="mapa" id="mapa"></div>
  <!-- mapa - fin -->

  <!-- testimoniales inicio  -->
  <section class="seccion">
    <h2>Testimoniales</h2>

    <div class="contenedor testimoniales">
      <div class="testimonial">
        <blockquote cite="">
          <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae ducimus est laboriosam animi iusto error quis, minus, ad, iste aut maiores. Non, corrupti voluptate. Provident, </P>
          <footer>
            <img src="/img/testimonial.jpg" alt="foto testimonial">
            <cite>Oswaldo Aponte <span>Desarroñor en @pirsma</span></cite>
          </footer>
        </blockquote>
      </div>

      <div class="testimonial">
        <blockquote cite="">
          <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae ducimus est laboriosam animi iusto error quis, minus, ad, iste aut maiores. Non, corrupti voluptate. Provident, </P>
          <footer>
            <img src="/img/testimonial.jpg" alt="foto testimonial">
            <cite>Susana Rivera <span>Desarroñor en @DigitalBit</span></cite>
          </footer>
        </blockquote>
      </div>

      <div class="testimonial">
        <blockquote cite="">
          <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae ducimus est laboriosam animi iusto error quis, minus, ad, iste aut maiores. Non, corrupti voluptate. Provident, </P>
          <footer>
            <img src="/img/testimonial.jpg" alt="foto testimonial">
            <cite>Oswaldo Aponte <span>Desarroñor en @pirsma</span></cite>
          </footer>
        </blockquote>
      </div>

    </div>
  </section>
  <!-- testimoniales fin -->

  <!-- Registrate en el new leter ' inicio ' -->
  <div class="newletter">
    <div class="contenido-newletter contenedor">
      <p>resgistrate al newsletter</p>
      <h3>gdlwebcamp</h3>
      <a href="" class="btn transparent">Registrate</a>
    </div>
  </div>
  <!-- Registrate en el new leter 'fin ' -->

  <!-- Cuenta atras Inicio  -->
  <section class="seccion contenedor">
    <h2>Faltan</h2>
    <div class="cuenta">
      <ul class="">
        <li><p class="numero">80</p>Dias</li>
        <li><p class="numero">15</p>horas</li>
        <li><p class="numero">5</p>minutos </li>
        <li><p class="numero">20</p>segundos </li>
      </ul>
    </div>
  </section>
  <!-- Cuenta atras fin -->


<!-- footer Start -->
<?php include './include/template/footer.php' ?>
<!-- footer end -->