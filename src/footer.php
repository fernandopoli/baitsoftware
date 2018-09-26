<!-- FOOTER -->
<footer id="contacto" class="mask-wrapper">
  <div class="mask-top">
    <img src="images/mask_right_top.svg" />
  </div>
  <div class="footer-info">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-7">
          <h2 class="title text-white title-line-left-white text-uppercase" data-aos="fade-up" data-aos-once="true">Contacto</h2>
          <p class="text-white" data-aos="fade-up" data-aos-once="true">
            Queremos escuchar su propuesta. Contacte a nuestro equipo de profesionales por los siguientes medios para organizar el desarrollo de un producto de calidad y a su medida.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-8 mb-5">
          <form id="contactForm" method="POST" action="send-mail.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6 col-12" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre y Apellido" name="nombre">
                </div>
              </div>
              <div class="col-md-6 col-12" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
              </div>
            </div>
            <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
              <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
            </div>
            <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
              <input type="submit" class="btn btn-blue" value="ENVIAR" />
            </div>
          </form>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <a href="tel://543413100526" class="mb-3 d-block link-line link-white" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
            <span class="btn-info btn-blue">
              <i class="fas fa-phone"></i>
            </span>
            +54 (341) 3100526
          </a>
          <a href="tel://+54 (341) 6042843" class="mb-3 d-block link-line link-white" data-aos="fade-up" data-aos-once="true" data-aos-delay="600">
            <span class="btn-info btn-blue">
              <i class="fas fa-phone"></i>
            </span>
            +54 (341) 6042843
          </a>
          <a href="mailto:info@baitsoftware.com" class="mb-3 d-block link-line link-white" data-aos="fade-up" data-aos-once="true" data-aos-delay="800">
            <span class="btn-info btn-blue">
              <i class="far fa-envelope"></i>
            </span> 
            info@baitsoftware.com
          </a>
        </div>
        <div class="col-12 text-center mb-3" data-aos="fade-up" data-aos-once="true">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/baitsoftware" class="btn-social btn-facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-social btn-twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://ar.linkedin.com/company/baitsoftware" class="btn-social btn-linkedin">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://plus.google.com/100678657789590176147" class="btn-social btn-gplus">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="text-center">         
            © <?php echo date("Y"); ?> BAIT Software - <span class="text-uppercase">ALL RIGHTS RESERVED </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->