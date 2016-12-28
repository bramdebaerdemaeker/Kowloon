$(function() {

  /*
  *
  * navbar expend */

  $("#nav-expend").on('click', function(){
    $("#sidenav").toggleClass('sidenav-big');
  });



  // start state of search and faq overlay
  $('#search-overlay').hide();
  $('#faq-overlay').hide();


  /*
  *
  * about page validation */

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function validate() {
    var email = $("#InputEmail").val();
    var text = $("#Textarea").val();
    if (validateEmail(email) && text) {
      $("#InputEmail").css("border-color", "green");
      console.log(text);
    } else {
      $("#InputEmail").css("border-color", "red");
      alert('Er ging iets mis, gelieve een geldig email adres in te geven en een message');
    }
    return false;
  }

  $("#validate").bind("click", validate);



  /*
  *
  * FAQ questions expend */

  $("#rotate1").on('click', function(){
    $(this).toggleClass('rotateZ');
  });

  $("#rotate2").on('click', function(){
    $(this).toggleClass('rotateZ');
  });

  $("#rotate3").on('click', function(){
    $(this).toggleClass('rotateZ');
  });

  $("#rotate4").on('click', function(){
    $(this).toggleClass('rotateZ');
  });

  $("#rotate5").on('click', function(){
    $(this).toggleClass('rotateZ');
  });


  /*
  *
  * search + faq overlay */

  $('#clear-search-input').on('click', function(){
    $('#search').val("");
  });

  $('#clear-faq-input').on('click', function(){
    $('#faq-search').val("");
  });

  $('#close-screen-overlay').on('click', function(){
    $('#search-overlay').hide();
  });

  $('#nav-search').on('click', function(){
    $('#search-overlay').toggle();
  });

  $('#nav-faq').on('click', function(){
    $('#faq-overlay').toggle();
  });

  $('#close-faq-overlay').on('click', function(){
    console.log('clicked');
    $('#faq-overlay').hide();
  });

  /*
  *
  * price slider */


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


  $( "#slider-range-articles" ).slider({
    range: true,
    min: 8,
    max: 500,
    values: [ 8, 500 ],
    animate:true,
    step:5,
    slide: function( event, ui ) {
      $( "#amount-min-articles" ).val( "€ " + ui.values[ 0 ]);
      $( "#amount-max-articles" ).val( "€ " + ui.values[ 1 ]);
    }
  });

  $( "#amount-min-articles" ).val("€ " + $( "#slider-range-articles" ).slider( "values", 0 ));
  $( "#amount-max-articles" ).val( "€ " + $( "#slider-range-articles" ).slider( "values", 1 ));
});
