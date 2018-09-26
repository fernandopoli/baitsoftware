<!doctype html>
<html lang="en">
<head>

  <?php $pageTitle = "Soluciones en tecnologías de la información";
  include 'metadata.php';  ?>

  <title>BAIT Software - <?php echo $pageTitle ?></title>
</head>
<body>

  <?php include 'header.php' ?>

  <!-- MODAL-->
  <div id="myModalMensaje" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div>

  <!-- WRAPPER -->
  <div class="wrapper">
    <!-- INICIO -->
    <section id="inicio" class="mask-wrapper">
      <div class="mask-bottom">
        <img src="images/mask_right_bottom.svg" />
      </div>
      <div class="mask-fancy">
        <img src="images/mask_fancy.svg" />
      </div>
      <div id="inicioCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#inicioCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#inicioCarousel" data-slide-to="1"></li>
          <li data-target="#inicioCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row align-items">
                <div class="col-lg-6 col-sm-6 col-12 title-wrapper">
                  <h2 class="text-uppercase" data-aos="fade-up" data-aos-once="true">INNOVACIÓN Y <span>CALIDAD</span> EN <span>SOLUCIONES</span> INFORMÁTICAS</h2>
                  <p data-aos="fade-up" data-aos-once="true">BAIT es la elección ideal para el desarrollo de soluciones a medida. Combinamos experiencia, seguridad y calidad con el objetivo de proveer productos de excelencia.</p>
                </div>
                <div class="col-lg-5 col-sm-6 col-12 position-initial">
                  <img data-src="images/notebook.png" class="notebook img-fluid img-mobile lazy" alt="BAIT Software - Works" data-aos="fade-up" data-aos-once="true" />
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items">
                <div class="col-lg-7 col-sm-6 col-12 title-wrapper">
                  <h2 class="text-uppercase"><span>Diseñando</span> experiencias <span>relevantes</span></h2>
                  <p>BAIT se expecializa en la creación de experiencias de usuarios, pasando por varios procesos hasta conseguir una estructura optima para cada problema.</p>
                </div>
                <div class="col-lg-5 col-sm-6 col-12 text-lg-right text-center">
                  <img data-src="images/phone-02.png" alt="BAIT Software - Works" class="img-fluid img-mobile lazy" />
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row align-items">
                <div class="col-lg-7 col-sm-6 col-12 title-wrapper">
                  <h2 class="text-uppercase"><span>Aplicaciones</span> y <span>desarrollos</span> a medida</h2>
                  <p>BAIT es la elección ideal para el desarrollo de soluciones a medida. Combinamos experiencia, seguridad y calidad con el objetivo de proveer productos de excelencia.</p>
                </div>
                <div class="col-lg-5 col-sm-6 col-12 text-lg-right text-center">
                  <img data-src="images/phone-01.png" alt="BAIT Software - Works" class="img-fluid img-mobile lazy" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="video-overlay">
          <video preload muted autoplay loop>
            <source src="video/slider.mp4" type="video/mp4" />
          </video>
        </div>
      </div>

    </section>
    <!-- END INICIO -->
    <!-- NOSOTROS -->
    <section id="nosotros" data-aos="fade-up" data-aos-once="true">
      <div class="container">
       <div class="row justify-content-center">
         <div class="col-12 col-lg-8">
          <h2 class="title text-default title-line-center text-uppercase text-lg-center text-xs-left">Nosotros</h2>
          <h3 class="text-gray text-lg-center text-xs-left">Un equipo enfocado en las últimas tecnologías</h3>
          <p class="text-lg-center text-xs-left">
           Nos especializamos en el desarrollo de soluciones informáticas utilizando las últimas tecnologías de software. Equipos con vasta experiencia en la investigación, análisis y desarrollo de soluciones innovadoras. Ponemos a disposición de nuestros clientes, productos de excelencia y potencial de primera calidad.
         </p>
       </div>
     </div>
   </div>
 </section>
 <!-- END NOSOTROS -->
 <!-- SERVICIOS -->
 <section id="servicios" class="bg-gray mask-wrapper">
  <div class="mask-top"><img src="images/mask_right_top.svg" /></div>
  <div class="mask-bottom"><img src="images/mask_right_bottom.svg" /></div>
  <div class="container">
   <div class="row justify-content-center">
     <div class="col-12">
       <h2 class="title text-default title-line-left text-uppercase" data-aos="fade-up" data-aos-once="true">Servicios</h2>
       <h3 class="text-gray mb-4" data-aos="fade-up" data-aos-once="true">Servicios a su disposición</h3>       
       <div class="row align-items-stretch">
         <div class="col-12 col-sm-6 col-md-4 mb-4">
           <div class="panel" data-aos="flip-right" data-aos-delay="400" data-aos-once="true">             
            <div class="text-center">
              <span class="icn-wrapper">
                <img class="lazy" data-src="images/icn_services_mobile.svg" alt="Aplicaciones Web y Móbiles" />
              </span>
            </div>
            <h4 class="text-center">Aplicaciones Web y Móviles</h4>
            <p>Desarrollo de aplicaciones web y móviles dinámicas y efectivas para cubrir las necesidades de su organización.</p>             
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
         <div class="panel" data-aos="flip-right" data-aos-delay="600" data-aos-once="true">             
          <div class="text-center">
            <span class="icn-wrapper">
              <img class="lazy" data-src="images/icn_services_maintenance.svg" alt="Mantenimiento" />
            </span>
          </div>
          <h4 class="text-center">Mantenimiento</h4>
          <p>Mantenimiento de aplicaciones para la correcta extensión de funcionalidades y mejoras.</p>             
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-4">
       <div class="panel" data-aos="flip-right" data-aos-delay="800" data-aos-once="true">             
        <div class="text-center">
          <span class="icn-wrapper">
            <img class="lazy" data-src="images/icn_services_system.svg" alt="Sistemas de Gestión" />
          </span>
        </div>
        <h4 class="text-center">Sistemas de gestión</h4>
        <p>Análisis y desarrollo de sistemas de gestión a medida.</p>             
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-6 mb-4">
     <div class="panel" data-aos="flip-right" data-aos-delay="1000" data-aos-once="true">             
      <div class="text-center">
        <span class="icn-wrapper">
          <img class="lazy" data-src="images/icn_services_consultancy.svg" alt="Consultoría" />
        </span>
      </div>
      <h4 class="text-center">Consultoría</h4>
      <p>Nuestro equipo se dispone a modernizar su organización con la última tecnología de software.</p>             
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 mb-4">
   <div class="panel" data-aos="flip-right" data-aos-delay="1200" data-aos-once="true">             
    <div class="text-center">
      <span class="icn-wrapper">
        <img class="lazy" data-src="images/icn_services_ux_ui_design.svg" alt="UI / UX Design" />
      </span>
    </div>
    <h4 class="text-center">UI / UX Design</h4>
    <p>Nos especializamos en el diseño y desarrollo de experiencias de usuario a través de los procesos creativos.</p>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- END SERVICIOS -->
<!-- NOSOTROS -->
<section id="clientes">
  <div class="container">
   <div class="row">
     <div class="col-12">
       <h2 class="title text-default title-line-center text-uppercase text-lg-center text-xs-left" data-aos="fade-up" data-aos-once="true">Clientes</h2>
       <p class="text-lg-center text-xs-left" data-aos="fade-up" data-aos-once="true">
         BAIT brindando excelencia y calidad para sus clientes.
       </p>
       <div class="owl-carousel owl-theme" data-aos="fade-up" data-aos-once="true">
        <div class="item" data-toggle="tooltip" data-placement="top" title="BEI Technologies">
          <img class="lazy img-fluid" data-src="images/clientes/BEI-logo.png" alt="BEI Technologies" />
        </div>
        <div class="item" data-toggle="tooltip" data-placement="top" title="Digital Jump">
          <img class="lazy img-fluid" data-src="images/clientes/digital-jump-logo.png" alt="Digital Jump" />
        </div>
        <div class="item" data-toggle="tooltip" data-placement="top" title="Kindred">
          <img class="lazy img-fluid" data-src="images/clientes/kindred-logo.png" alt="Kindred" />
        </div>
        <div class="item" data-toggle="tooltip" data-placement="top" title="Mercado de Concentración de Fisherton">
          <img class="lazy img-fluid" data-src="images/clientes/mcf-logo.jpg" alt="Mercado de Concentración de Fisherton" />
        </div>
        <div class="item" data-toggle="tooltip" data-placement="top" title="Renew Interactive">
          <img class="lazy img-fluid" data-src="images/clientes/renew-interactive-logo.png" alt="Renew Interactive" />
        </div>
        <div class="item" data-toggle="tooltip" data-placement="top" title="Taller IT">
          <img class="lazy img-fluid" data-src="images/clientes/taller-it-logo.jpg" alt="Taller IT" />
        </div>
        <div class="item" data-toggle="tooltip" data-placement="top" title="Verbo Translations">
          <img class="lazy img-fluid" data-src="images/clientes/vt-logo.png" alt="Verbo Translations" />
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<?php include 'footer.php' ?>

</div>
<!-- END WRAPPER -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/lazyload.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/init.js"></script>
<script>
  // AOS
  AOS.init();
  // OWL CAROUSEL
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:4,
        nav:false
      },
      1000:{
        items:6,
        nav:false,
        loop:true
      }
    }
  });
  // LAZY LOAD
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
  });
</script>
</body>
</html>