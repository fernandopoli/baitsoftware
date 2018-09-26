// On Scroll Header Change
$(document).scroll(function() {    
  var scroll = $(window).scrollTop();

  if (scroll >= 1) {
    $("#header").addClass("active-header");
  }else{
   $("#header").removeClass("active-header");
 }
})


$(document).ready(function(){
  /*CONTACT VALIDATION*/
  $("#contactForm").validate({
    rules: {
      nombre: "required",
      email: {
        required: true,
        email: true
      },
      mensaje: "required"
    },
    messages: {
      nombre: "Por favor escriba su nombre y apellido.",    
      email: {
        required: "Por favor escriba su email.",
        email: "Escriba un email Válido. Ejemplo: name@domain.com."
      }, 
      mensaje: "Por favor escriba un mensaje."
    },
    submitHandler: function (form) {
      $.ajax({
        type: $(form).attr('method'),
        url: $(form).attr('action'),
        data: $(form).serialize(),
        success: function () {
          $('#myModalMensaje .modal-title').html('<h3 class="text-green my-0">Su Mensaje fue enviado!</h3>');
          $('#myModalMensaje .modal-body').html('<p>A la brevedad uno de nuestros representantes se estará comunicando con usted.</p><p>Muchas Gracias.</p>');  
          $('#myModalMensaje').modal({ show: true });
          var validator = $( "#contactForm" ).validate();
          validator.resetForm();
        },
        error: function(){
          $('#myModalMensaje .modal-title').html('<h3 class="text-red my-0">Se ha producido un error!</h3>');
          $('#myModalMensaje .modal-body').html('<p>Por favor intente nuevamente.</p><p>Muchas Gracias.</p>')
          $('#myModalMensaje').modal({ show: true });
        }
      });    
    return false; // required to block normal submit since you used ajax
  }
});

  /* TOOLTIP */
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  /* NAV BAR CLOSE */
  $("#naBarLinks li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
})

