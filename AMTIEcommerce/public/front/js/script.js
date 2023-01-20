//animaciones
AOS.init();

//VALIDACIONES DEL FORMULARIO

// Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
(function () {
    'use strict'
  
    // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
    var forms = document.querySelectorAll('.needs-validation')
  
    // Bucle sobre ellos y evitar el envío
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

// FLUJO DE COMPRA

// ------------step-wizard-------------
$(document).ready(function () {
  $('.nav-tabs > li a[title]').tooltip();
  
  //Wizard
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

      var target = $(e.target);
  
      if (target.parent().hasClass('disabled')) {
          return false;
      }
  });

  $(".next-step").click(function (e) {

      var active = $('.wizard .nav-tabs li.active');
      active.next().removeClass('disabled');
      nextTab(active);

  });
  $(".prev-step").click(function (e) {

      var active = $('.wizard .nav-tabs li.active');
      prevTab(active);

  });
});

function nextTab(elem) {
  $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
  $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
  $('.nav-tabs li.active').removeClass('active');
  $(this).addClass('active');
});