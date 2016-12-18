$(function() {


  /*
   ** navbar expend **
   */

  $("#hamburger").on('click', function(){
    console.log('clicked hamburger');
    $("#sidenav").toggleClass('sidenav-big');
  });


  $("#rotate1").on('click', function(){
    $(this).toggleClass('rotateZ');
  });

  $("#rotate2").on('click', function(){
    $(this).toggleClass('rotateZ');
  });

  $("#rotate3").on('click', function(){
    $(this).toggleClass('rotateZ');
  });

  /*
   ** price slider **
   */

  $( "#slider-range" ).slider({
    range: true,
    min: 8,
    max: 500,
    values: [ 8, 500 ],
    animate:true,
    step:5,
    slide: function( event, ui ) {
      $( "#amount-min" ).val( "€ " + ui.values[ 0 ]);
      $( "#amount-max" ).val( "€ " + ui.values[ 1 ]);
    }
  });

  $( "#amount-min" ).val("€ " + $( "#slider-range" ).slider( "values", 0 ));
  $( "#amount-max" ).val( "€ " + $( "#slider-range" ).slider( "values", 1 ));
});
