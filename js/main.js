$(function() {

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
