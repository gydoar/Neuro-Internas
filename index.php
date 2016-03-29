<?php include "header.php"; ?>

  <!-- Bloque purpura -->
  <section class="bloque-purpura">
    <div class="container">
      <div class="ten columns offset-by-one center">
        <h2>PRIMER PROGRAMA CERTIFICADO PRESENCIAL DE</h2>
        <h1>NEUROCODIFICACIÓN 2016</h1>
        <div class="twelve columns"><hr></div>
        <h3>INVESTIGACIÓN, MARKETING, EMPODERAMIENTO, ORATORIA Y PROSPERIDAD</h3>
      </div>

      <div class="twelve columns center margin-top-20px">
        <div class="five columns formulario offset-by-one">
          <h3>Déjanos Tus Datos</h3>
          <form method="POST" action="">
            <div><input type="text" class="nombre" name="nombre" placeholder="NOMBRE" value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>"><?php if(isset($errors)){ echo $errors[1]; } ?></div>
            <div><input type="text" class="apellido" name="apellido" placeholder="APELLIDO" value="<?php if(isset($_POST['apellido'])){ echo $_POST['apellido']; } ?>"><?php if(isset($errors)){ echo $errors[2]; } ?></div>
            <div><input type="email" class="email" name="email" placeholder="CORREO ELECTRÓNICO" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"><?php if(isset($errors)){ echo $errors[3]; } ?></div>
            <div><input type="tel" class="telefono" name="telefono" placeholder="CELULAR" value="<?php if(isset($_POST['telefono'])){ echo $_POST['telefono']; } ?>"><?php if(isset($errors)){ echo $errors[4]; } ?></div>
            <div><input type="text" class="ciudad" name="ciudad" placeholder="CIUDAD" value="<?php if(isset($_POST['ciudad'])){ echo $_POST['ciudad']; } ?>"><?php if(isset($errors)){ echo $errors[5]; } ?></div>
            <?php if(isset($result)) { echo $result; } ?>
            <label for=""><img width="12" src="images/icon-lock.png" alt=""> Confidencialidad. Nunca SPAM</label>
            <div><input type="submit" class="boton" name="boton" value="Solicitar más información"></div>
          </form>
        </div>

        <div class="five columns margin-top-20px nombre-expositores">
          <h2>JÜRGEN KLARIĆ, <br>MAURICIO BOCK Y NORA SARMIENTO</h2>
          <div class="fechas-neuro-codificacion">
            <img src="images/icon-time.png" alt=""> <p>17 DE MARZO DE 2016<br>3:00 p.m a 10:00 p.m</p>
          </div>
          <div class="fechas-neuro-codificacion">
            <img src="images/icon-map.png" alt=""> <p>MEDELLÍN - COLOMBIA<br>PLAZA MAYOR</p>
          </div>
          <div class="boton-tickets-neuro"><a class="boton-ticket-header" href="#tickets">COMPRAR TICKETS</a></div>
        </div>
      </div>
    </div>

    <div class="container people center" id="docentes">
      <div class="three columns offset-by-one nora-people">
        <div><img width="300px;" src="images/nora-sarmiento.png" alt=""></div>
      </div>

      <div class="four columns jurgen-photo">
        <div><img width="350px;" src="images/jurgen-klaric.png" alt=""></div>
      </div>

      <div class="three columns mauricio-people">
        <div><img width="320px;" src="images/mauricio-bock.png" alt=""></div>
      </div>
    </div>
  </section>
  
  <!-- Textos people -->
  <div class="text-people">
    <div class="container center">
      <div class="ten columns offset-by-one">
          <div class="four columns">
            <img src="images/circle-colombia.png" alt="">

            <p>Psicóloga, Neurocientífica, Académica de la Universidad Konrad Lorenz y Directora científica de Mindcode Institute.</p>

            <div><hr></div>
            <a class="boton-ticket-header" href="" id="enlaceajax">LEER MÁS</a>
          </div>

          <div class="four columns">
            <img src="images/circle-us.png" alt="">

            <p>Klaric´ es Investigador, escritor y docente en temas relacionados con el comportamiento inconsciente de los seres humanos.</p>

            <div><hr></div>
            <a class="boton-ticket-header" href="" id="enlaceajax2">LEER MÁS</a>
          </div>

          <div class="four columns">
            <img src="images/circle-chile.png" alt="">

            <p>Ex gerente de Great Place to Work, Académico de la Universidad del Pacífico,          presidente del Institute of NeuroCoaching.</p>
            
            <div><hr></div>
            <a class="boton-ticket-header" href="" id="enlaceajax3">LEER MÁS</a>
          </div>
          <div id="destino"></div>
      </div>
    </div>

    <div class="center">
      <h5><a class="boton-yellow various" href="#inline">Quiero más INFO</a></h5>
    </div>
  </div>
    
  <!-- Jurgen historia -->

  <section class="historia">
    <div class="container right">
      <div class="nine columns offset-by-three">
        <div class="twelve columns">
          <h2>JÜRGEN KLARIĆ</h2>
        </div>
        
        <div class="eight columns offset-by-four">
          <p>Considerado entre los 10 mercadólogos más influyentes en el mundo, Escritor de dos "Best Seller’s” de editorial Planeta, el 2015 sus libros de negocios son siempre los más vendidos en toda librería donde llegan, asesora a una docena de empresas líderes en el mundo y por ahora es el divulgador científico negocios y motivación más leído en español en las redes sociales.
          Recientemente fue nombrado como el Steve Jobs de la educación gracias a su innovación social educativa BiiA Lab la cual en solo 2 años ya es la institución que regala más becas y cursos por internet en español ademas de ser vista por mas de 1 millón de personas al año en 35 países, con más de 80 conferencias al año el comparte e inspira a miles de personas a lograr más rápido sus objetivos y también a ser mejores personas.</p>

          <div class="right margin-top-20px">
            <h5><a class="boton-yellow various" href="#inline">Reservar mi cupo</a></h5>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Seccion de libros -->
    <section class="container libros">
      <div class="center">
        <h3>PACK DE LIBROS DE <span>JÜRGEN KLARIĆ</span></h3>
      </div>

      <div class="row content-libros">
        <div class="six columns imagen-libros">
          <img class="twelve columns" src="images/libros.png" alt="">
        </div>

        <div class="five columns offset-by-one margin-top-20px right text-libros">
          <h4>Estamos Ciegos Best Seller de la Editorial Planeta</h4>
          <p>Este libro contiene las pruebas más crudas de los fracasos billonarios de         empresarios, publicistas y mercadólogos.</p>
          <br>
          <h4>Véndele a la mente no a la gente</h4>
          <p>Es el último libro de Jürgen Klarić enfocado a las ventas, uno a uno, de               productos y servicios. Este método y técnicas salieron de diversos estudios en laboratorios científicos y también avalados por investigaciones antropológicas y neurocientíficas.</p>
        </div>
        <div class="five columns offset-by-one right">
          <h5><a class="boton-yellow various" target="new" href="http://jurgenklaric.com/productos">Comprar libros</a></h5>
        </div>
      </div>
    </section>
  </section>

  <!-- Temas -->

  <section class="temas" id="programa">
    <div class="container">
      <div class="ten columns offset-by-one">
        <img class="twelve columns" src="images/bg-agenda.png" alt="">
      </div>

      <div class="twelve columns tema1">
        <div class="tema-numero"><p>1</p></div>
        <div class="tema-text"><p>TEMA UNO<br><span>Neuroventas, Neurooratoria<br> y Neuroriqueza</span></p></div>

        <div class="temas-informacion">
          <p><strong>Objetivo</strong></p>
          <p>Aprender de forma científica a vender, hablar en público y preparar tu mente hacia la prosperidad; ya que no sólo vas a  tener más éxito económico, sino SER más feliz, realizado y líder.</p>
          <br>
          <p><strong>NEURO VENTAS (1 hora)</strong></p>
          <p>- Qué y cómo analizar antes de hablar.</p>
          <p>- Descubrir por qué la gente compra y cómo estimular esto.</p>
          <p>- Modelo de venta efectiva.</p>
          <p>- Pirámide para ganar los SI’s.</p>
          <p>- ¿Cómo desarmar un cliente duro y difícil?</p>
          <p>- Modelo de discurso efectivo de venta, servicios y productos.</p>

          <br>
          <p><strong>NEURO ORATORIA (1 hora)</strong></p>
          <p>- Aprende qué es lo que hace que te pongan atención.</p>
          <p>- ¿Cómo escribir una conferencia contundente? Story telling de conferencias - Cómo hablar, moverse y vestir para conectar de forma contundente con tu audiencia.</p>

          <br>
          <p><strong>NEURO RIQUEZA (1 hora)</strong></p>
          <p>- Descubre si tú le tienes miedo al dinero y por qué no eres rico.</p>
          <p>- Datos científicos e históricos de por qué los latinos tenemos la mente más pobre del mundo.</p>
          <p>- Qué hacer para cambiar tu mentalidad, logrando riqueza y prosperidad.</p>

          <br>
          <p><strong>¿Qué te llevarás de forma garantizada?</strong></p>
          <p>Aprender a vender, orar y descubrir si tienes mente de pobre o no. Según lo anterior, implementar un par de tips prácticos para lograr abundancia y prosperidad de forma adecuada.</p>
        </div>  
      </div>

      <!-- Tema 2 -->
      <div class="twelve columns tema1">
        <div class="tema-numero"><p>2</p></div>
        <div class="tema-text"><p>TEMA DOS<br><span>Neuroempoderamiento</span></p></div>

        <div class="temas-informacion">
          <p><strong>Objetivo</strong></p>
          <p>Trabajar en equipo con tu mente te hará ser y lograr lo que quieras sin tanto desgaste. Aprende a crear las mejores condiciones y entornos para convertirte en un ser especial, el cual pueda operar y lograr liderazgo de forma sostenible.</p>
          <br>
  
          <p><strong>¿Qué te llevarás de forma garantizada?</strong></p>
          <p>Cómo hacer que tu mente y SER estén en sintonía para lograr más y desgastarse menos.</p>
        </div>  
      </div>

      <!-- Tema 3 -->
      <div class="twelve columns tema1">
        <div class="tema-numero"><p>3</p></div>
        <div class="tema-text"><p>TEMA TRES<br><span>Neuroempoderamiento</span></p></div>

        <div class="temas-informacion">
          <p><strong>Objetivo</strong></p>
          <p>Aprender qué y cómo se estimula a que la gente diga SI o NO.</p>
          <br>

          <p>Aprenda por qué la mente dice una cosa y hace otra; conoce qué debes<br>  
            de activar o estimular para que la mente reaccione a favor de tu discurso,<br>
            producto o servicio.</p>
          <br>

          <p><strong>Temas a tratar</strong></p>
          <p>- ¿Cómo funciona la mente?</p>
          <p>- ¿Cómo predecir un proceso de compra favorable?</p>
          <p>- Bases de algoritmos para determinar los estímulos.</p>
          <p>- Verdades y mentiras del neuromarketing.</p>
          <p>- Marco ético.</p>
          <p>- Recomendaciones prácticas para vender, aprender y entender <br>en
                el mundo de los negocios.</p>
          <br>
          <p><strong>¿Qué te llevarás de forma garantizada?</strong></p>
          <p>Cómo hacer que tu mente y SER estén en sintonía para lograr más <br>y desgastarse menos.</p>
        </div>  
      </div>
    </div>
  </section>

  <!-- Logo Biia -->

  <section class="logo-biia">
    <div class="container center">
      <img class="sello" src="images/sello.png" alt="">
      
      <div class="twelve columns margin-top-20px">
        <img src="images/logo-certificado-biia.png" alt="">
      </div>    
    </div>
  </section>
 
 <!-- Seccion Cerfificados -->

 <section class="certificados" id="certificacion">
   <div class="container center">
     <img class="twelve columns" src="images/certificados.png" alt="">
     
     <p><strong>Tu participación en este programa certificado tiene un alto valor curricular, serás acreditado con un título otorgado por BiiA Lab USA una de las instituciones más auténticas y vanguardistas de los Estados Unidos; al cursar y completar correctamente tu examen el cual deberás tomarlo en línea en www.BiiALab.org en un tiempo máximo de 10 días, después de terminar el programa recibirás el mismo vía digital.</strong></p>

     <p>*Si adquieres la inscripción con memorias contarás con este valioso material de estudio.</p>
   </div>
   <div class="center">
      <h5><a class="boton-yellow various" href="#inline">Deseo inscribirme y recibir memorias del evento</a></h5>
   </div>
 </section>

 <!-- Locaciones -->

 <section class="locaciones">
  <div class="container center">
    <h3>LOCACIONES</h3>
    <div class="ten columns offset-by-one">
      <img class="twelve columns" src="images/locaciones.png" alt="">
      <p>*Esta imagen es referencial</p>
    </div>

  </div> 
 </section>

 <!-- Tickets -->

 <section class="tickets" id="tickets">
   <div class="container center">
    <div>
      <h3>TICKETS</h3>
    </div>
    <div class="row">
      <!-- plan 1-->

       <div class="three columns ">
         <div class="title-general">
           <h4>GENERAL</h4>
         </div>
         <div class="plan-ticket">
           <img src="images/icon-verde.png" alt="">
           <p class="color-purpura">Precio Preventa</p>
           <h5 class="color-gray"><span>$</span>250,000<span>COP</span></h5>
           <p>* Hasta mayo 15</p>
           <div class="line-precio-preventa"><hr></div>

           <p class="color-purpura">Precio Regular</p>
           <h5 class="color-purpura"><span>$</span>350,000<span>COP</span></h5>

           <ul class="color-purpura left">
             <li>Memorias digitales</li>
             <li>Cerficicado digital</li>
           </ul>

           <div class="pricing-boton">
            <form action="">
              <!-- Descripcion del producto -->
              <input type="hidden" name="descripcion" value="Neuro Codificación - Medellín - General">
              <!-- Fecha del evento -->
              <input type="hidden" name="fecha" value="17 de Mayo de 2016">
              <!-- Precio de venta -->
              <input type="hidden" name="precio" value="250000">
              <!-- Precio de venta en dolares para PayPal-->
              <input type="hidden" name="precio_paypal" value="230000">
              <!-- Pais -->
              <input type="hidden" name="pais" value="COLOMBIA">

              <input align="bottom" type="submit" class="boton-comprar-tickets" value="COMPRAR TICKETS">
            </form>
           </div>
         </div> 
       </div>

       <!-- Plan 2 -->
       <div class="three columns">
         <div class="title-general-plus">
           <h4>GENERAL PLUS</h4>
         </div>
         <div class="plan-ticket">
           <img src="images/icon-verde.png" alt="">
           <p class="color-purpura">Precio Preventa</p>
           <h5 class="color-gray"><span>$</span>250,000<span>COP</span></h5>
           <p>* Hasta mayo 15</p>
           <div class="line-precio-preventa"><hr></div>

           <p class="color-purpura">Precio Regular</p>
           <h5 class="color-purpura"><span>$</span>350,000<span>COP</span></h5>

           <ul class="color-purpura left">
             <li>Memorias digitales</li>
             <li>Certificado digital</li>
           </ul>

           <div class="pricing-boton">
             <form action="">
              <!-- Descripcion del producto -->
              <input type="hidden" name="descripcion" value="Neuro Codificación - Medellín - General">
              <!-- Fecha del evento -->
              <input type="hidden" name="fecha" value="17 de Mayo de 2016">
              <!-- Precio de venta -->
              <input type="hidden" name="precio" value="250000">
              <!-- Precio de venta en dolares para PayPal-->
              <input type="hidden" name="precio_paypal" value="230000">
              <!-- Pais -->
              <input type="hidden" name="pais" value="COLOMBIA">

              <input type="submit" class="boton-comprar-tickets" value="COMPRAR TICKETS">
            </form>
           </div>
         </div>
       </div>

       <!-- Plan 3 -->
       <div class="three columns">
         <div class="title-vip">
           <h4>V.I.P</h4>
         </div>
         <div class="plan-ticket">
           <img src="images/icon-verde.png" alt="">
           <p class="color-purpura">Precio Preventa</p>
           <h5 class="color-dorado"><span>$</span>500,000<span>COP</span></h5>
           <p>* Hasta mayo 15</p>
           <div class="line-precio-preventa"><hr></div>

           <p class="color-purpura">Precio Regular</p>
           <h5 class="color-purpura"><span>$</span>700,000<span>COP</span></h5>

           <ul class="color-purpura left">
             <li>Memorias digitales</li>
             <li>Certificado digital</li>
             <li>Posibilidad de participar en preguntas para tu negocio</li>
             <li>Audioterapia de Neuroriqueza con tecnología bineural, sin audífonos</li>
             <li>Acceso archivo desde la nube</li>
           </ul>

           <div class="pricing-boton">
             <form action="">
              <!-- Descripcion del producto -->
              <input type="hidden" name="descripcion" value="Neuro Codificación - Medellín - General">
              <!-- Fecha del evento -->
              <input type="hidden" name="fecha" value="17 de Mayo de 2016">
              <!-- Precio de venta -->
              <input type="hidden" name="precio" value="250000">
              <!-- Precio de venta en dolares para PayPal-->
              <input type="hidden" name="precio_paypal" value="230000">
              <!-- Pais -->
              <input type="hidden" name="pais" value="COLOMBIA">

              <input type="submit" class="boton-comprar-tickets" value="COMPRAR TICKETS">
            </form>
           </div>
         </div>
       </div>

       <!-- Plan 4 -->
       <div class="three columns">
         <div class="title-vip-cena">
           <h4>V.I.P + CENA</h4>
         </div>
         <div class="plan-ticket">
           <img src="images/icon-verde.png" alt="">
           <p class="color-purpura">Precio Preventa</p>
           <h5 class="color-dorado"><span>$</span>500,000<span>COP</span></h5>
           <p>* Hasta mayo 15</p>
           <div class="line-precio-preventa"><hr></div>

           <p class="color-purpura">Precio Regular</p>
           <h5 class="color-purpura"><span>$</span>700,000<span>COP</span></h5>

           <ul class="color-purpura left">
             <li>Memorias en carpeta dura</li>
             <li>Certificado impreso</li>
             <li>Libro Estamos Ciegos Dedicado</li>
             <li>Foto con Jürgen</li>
             <li>Audioterapia de Neuroriqueza con tecnologia bineural, con audífonos</li>
             <li>Cena consultoría de 2 horas privada</li>
           </ul>
           
           <div class="pricing-boton">
             <form action="">
              <!-- Descripcion del producto -->
              <input type="hidden" name="descripcion" value="Neuro Codificación - Medellín - General">
              <!-- Fecha del evento -->
              <input type="hidden" name="fecha" value="17 de Mayo de 2016">
              <!-- Precio de venta -->
              <input type="hidden" name="precio" value="250000">
              <!-- Precio de venta en dolares para PayPal-->
              <input type="hidden" name="precio_paypal" value="230000">
              <!-- Pais -->
              <input type="hidden" name="pais" value="COLOMBIA">

              <input type="submit" class="boton-comprar-tickets" value="COMPRAR TICKETS">
            </form>
           </div>
         </div>
       </div>
    </div>  
   </div>

   <!-- Necesitas hablar con nosotros -->
   <div class="container">
    <div class="eight columns offset-by-two center call-to-action">
      <h4>¿NECESITAS <span>HABLAR</span> CON NOSOTROS?</h4>

      <div class="icon-tel">
        <img width="120px;" src="images/icon-tel.png" alt="">
      </div>
      <div class="text-tel">
        <p>Llámanos en Colombia al <br><a href="tel:(1) 381 2860">(1) 381 2860</a></p>
      </div>
      <br><br><br>
      <h4>MEDIOS DE PAGO</h4>
      <p>Puedes pagar de las siguientes formas:</p>
      <a href="#tickets"><img class="twelve columns" src="images/medios-pago.png" alt=""></a>
      
      <div class="text-consignacion">
        <p><strong>Consignación bancaria</strong><br>Cuenta de ahorros Bancolombia 895-769727-85<br>a nombre de Jurgen Klarić<br>con cédula de extranjería N° 356490.<br>Enviar comprobante de la transacción con nombre y teléfono<br>al correo electrónico:<br><a href="mailto:info@jurguenklaric.com">info@jurguenklaric.com</a></p>
      </div>
      
    </div>
   </div>
 </section>

 <!-- Plaza Mayor -->

 <section class="plaza-mayor">
   <div class="container center">
     <h4>PLAZA <span>MAYOR</span></h4>

     <div class="row">
       <div class="six columns">
         <img class="twelve columns" height="300px" width="100%" src="images/plaza-mayor.jpg" alt="">
       </div>
       <div class="six columns">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.153400291423!2d-75.57834868552409!3d6.243505328087787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429ab627545c1%3A0x23674fd4c47ec19c!2sPlaza+Mayor!5e0!3m2!1ses!2ses!4v1457047329898" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>

       <div class="twelve columns center">
          <h5><a class="boton-yellow various" href="#inline">Solicito que me llamen</a></h5>
       </div>
     </div>
   </div>
 </section>
  
 <!-- background fotos -->
 <section class="fotos"></section>

 <div id="inline" style="width:100%;display: none;" class="center">
        <h3>Déjanos Tus Datos</h3>
          <form method="POST" action="">
            <div><input type="text" class="nombre1" name="nombre1" placeholder="NOMBRE" value="<?php if(isset($_POST['nombre1'])){ echo $_POST['nombre1']; } ?>"><?php if(isset($errorss)){ echo $errorss[6]; } ?></div>
          <div><input type="text" class="apellido1" name="apellido1" placeholder="APELLIDO" value="<?php if(isset($_POST['apellido1'])){ echo $_POST['apellido1']; } ?>"><?php if(isset($errorss)){ echo $errorss[7]; } ?></div>
          <div><input type="email" class="email1" name="email1" placeholder="CORREO ELECTRÓNICO" value="<?php if(isset($_POST['email1'])){ echo $_POST['email1']; } ?>"><?php if(isset($errorss)){ echo $errorss[8]; } ?></div>
          <div><input type="tel" class="telefono1" name="telefono1" placeholder="CELULAR" value="<?php if(isset($_POST['telefono1'])){ echo $_POST['telefono1']; } ?>"><?php if(isset($errorss)){ echo $errorss[9]; } ?></div>
          <div><input type="text" class="ciudad1" name="ciudad1" placeholder="CIUDAD" value="<?php if(isset($_POST['ciudad1'])){ echo $_POST['ciudad1']; } ?>"><?php if(isset($errorss)){ echo $errorss[10]; } ?></div>
          <?php if(isset($result)) { echo $result; } ?>
          <label class="center" for=""><img width="12" src="images/icon-lock.png" alt=""> Confidencialidad. Nunca SPAM</label>
          <div><input type="submit" class="boton1" name="boton1" value="Enviar datos"></div>
          </form>
   
 </div>

<?php include "footer.php"; ?>