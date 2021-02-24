$(document).ready(function () {
  establece_estado();
  ocm();
  ultimos();
  $("#oscuro").click(function () {
    cambiar_estado();
  });

});

function establece_estado() {
  estado = localStorage.getItem('luces');

  switch (estado) {
    case null:
      localStorage.setItem('luces', 'on');
      break;
    case 'on':
      encender_luces();
      break;
    case 'off':
      apagar_luces();
      break;
  }

}

function cambiar_estado() {
  estado = localStorage.getItem('luces');
  if (estado == "on") {
    apagar_luces()
  } else {
    encender_luces();
  }
}

function encender_luces() {
  // Comprobar estado
  estado = localStorage.getItem('luces');
  if (estado == "on") {
    return
  }
  localStorage.setItem('luces', 'on');
  $("body").toggleClass("body-dark");
  $('#resultado').children().toggleClass('div-dark bg-white');
  $('#selectores').children().toggleClass('div-dark bg-white');
  $('#ultimos').toggleClass('div-dark bg-white');
  $('#premiados').toggleClass('div-dark bg-white');
  $('#icono').toggleClass('fa-lightbulb fa-moon');
  $('#contacto').children().toggleClass('div-dark bg-white');
}

function apagar_luces() {
  localStorage.setItem('luces', 'off');
  $("body").toggleClass("body-dark");
  $('#resultado').children().toggleClass('bg-white div-dark');
  $('#selectores').children().toggleClass('bg-white div-dark');  
  $('#ultimos').toggleClass('bg-white div-dark');
  $('#premiados').toggleClass('bg-white div-dark');
  $('#icono').toggleClass('fa-moon fa-lightbulb');
  $('#contacto').children().toggleClass('bg-white div-dark');
}

function showVal() {
  var newVal = document.getElementById("longitud_nombre").value;
  document.getElementById("valor_longitud").innerHTML = newVal;
}

function ocm() {

  $("#generar").click(function () {

    // reinicializa el div
    jQuery("#res_nombre").empty();
    jQuery("#res_desc").empty();

    //cogemos el valor del input
    var num = $("#longitud_nombre").val();

    //creamos array de parámetros que mandaremos por POST
    var params = {
      "longitud": num
    };

    //llamada al fichero PHP con AJAX
    $.ajax({
      data: params,
      url: 'inc/generador.php',
      type: 'post',
      beforeSend: function () {
        jQuery('#loading_spinner').show();
        //antes de enviar la petición al fichero PHP, mostramos mensaje
        jQuery("#res_nombre").html("Generando...");
      },
      success: function (response) {

        setTimeout(function () {
          jQuery('#loading_spinner').hide();
          //mostramos salida del PHP
          jQuery("#res_nombre").html(response);
          comprobar(response);
        }, 500);

      }
    });
  });

}

function comprobar(response) {

  var params = {
    "nombre": response
  };

  //llamada al fichero PHP con AJAX
  $.ajax({
    data: params,
    url: 'inc/pdo_r.php',
    type: 'post',
    beforeSend: function () {
    },
    success: function (response) {
      jQuery("#res_desc").html(response);
      guardar();
    }
  });

}

function guardar() {

  ultimos();

  var nom = $("#res_nombre").html();

  var params = {
    "nombre": nom
  };

  //llamada al fichero PHP con AJAX
  $.ajax({
    data: params,
    url: 'inc/pdo_w.php',
    type: 'post',
  });



}

function ultimos() {

  $.ajax({
    url: 'inc/pdo_ult.php',
    type: 'post',
    beforeSend: function () {
    },
    success: function (response) {
      jQuery("#res_ult").html(response);
    }
  });

}