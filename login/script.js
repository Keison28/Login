$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      document.getElementById("bodyContent").style.width="100%";
    });
});

function readURL(input) {
  if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function(e) {
  // Asignamos el atributo src a la tag de imagen
  $('#imagenmuestra').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
  }
  }
  
  // El listener va asignado al input
  $("#imagen").change(function() {
  readURL(this);
  });
  