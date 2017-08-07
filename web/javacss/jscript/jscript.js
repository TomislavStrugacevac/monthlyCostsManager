$(document).ready(function(){
  
  /*$('*').on('mouseup', function(){
    $('.total').css('color', 'white');
  });
  $('*').on('mousedown', function(){
    $('.total').css('color', 'red');
  }); */

  /*
  $(document).on('mousemove', function(e){
    var first = e.clientX;
    var last = e.clientY;
    var colorcode = first + last;
    var colorhex = colorcode.toString(16);
    console.log(colorhex);
  $('body').css('background-color', '#'+colorhex);
  }); */


  $('form').on('keydown', function(){
    var total = 0;
    var $values = $('form').find('.field-value');

    $values.each(function(){
      var value = $(this).val();
      var valueFixed = parseFloat(value.replace(',','.'));
      total += valueFixed ;

      $('.total').html(total.toFixed(2));
    });

  });

});