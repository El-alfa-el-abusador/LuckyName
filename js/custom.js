$(document).ready(function () {

  $("#oscuro").click(function () {

    $("body").toggleClass("body-dark");
    $('#resultado').children().toggleClass('bg-white div-dark');
    $('#selectores').children().toggleClass('bg-white div-dark');
    $('#ultimos').toggleClass('bg-white div-dark');
    $('#premiados').toggleClass('bg-white div-dark');
    $('#icono').toggleClass('fa-moon fa-lightbulb');

  });

});
