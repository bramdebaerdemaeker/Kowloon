$(function() {

    /*
     *
     * navbar expend */
    $("#nav-expend").on('click', function() {
        $("#sidenav").toggleClass('sidenav-big');
    });


    /*
     *
     * start state of search and faq overlay */
    $('#search-overlay').hide();
    $('#faq-overlay').hide();


    /*
     *
     * about page validation */

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function validateMessage2() {
        var email = $("#InputEmail").val();
        var text = $("#Textarea").val();

        if (validateEmail(email)) {
            if (text) {
                $("#Textarea").css("border-color", "green");
                window.location.replace("/about");
            } else {
                $("#Textarea").css("border-color", "red");
                alert('Please fill in the message field');
            }
        } else {
            if (text) {
                $("#Textarea").css("border-color", "green");
                alert('Please fill in the email field');
            } else {
                $("#Textarea").css("border-color", "red");
                $("#InputEmail").css("border-color", "red");
                alert('Please fill in the email and the message field');
            }
        }
        return false;
    }



    $("#validateMessage1").bind("click", validateMessage2);



    /*
     *
     * FAQ questions expend */

    $("#rotate1").on('click', function() {
        $(this).toggleClass('rotateZ');
    });

    $("#rotate2").on('click', function() {
        $(this).toggleClass('rotateZ');
    });

    $("#rotate3").on('click', function() {
        $(this).toggleClass('rotateZ');
    });

    $("#rotate4").on('click', function() {
        $(this).toggleClass('rotateZ');
    });

    $("#rotate5").on('click', function() {
        $(this).toggleClass('rotateZ');
    });


    /*
     *
     * search + faq overlay */

    $('#clear-search-input').on('click', function() {
        $('#search').val("");
    });

    $('#clear-faq-input').on('click', function() {
        $('#faq-search').val("");
    });

    $('#close-screen-overlay').on('click', function() {
        $('.search').removeClass('active');
        $('#search-overlay').hide();
    });

    $('#nav-search').on('click', function() {
        $('.search').toggleClass('active');
        $('#faq-overlay').hide();
        $('#search-overlay').toggle();
    });

    $('#nav-faq').on('click', function() {
        $('.faq').toggleClass('active');
        $('#search-overlay').hide();
        $('#faq-overlay').toggle();
    });

    $('#close-faq-overlay').on('click', function() {
        $('.faq').removeClass('active');
        console.log('clicked');
        $('#faq-overlay').hide();
    });

    /*
     *
     * price slider */


    $("#slider-range").slider({
        range: true,
        min: 8,
        max: 500,
        values: [8, 500],
        animate: true,
        step: 5,
        slide: function(event, ui) {
            $("#amount-min").val("€ " + ui.values[0]);
            $("#amount-max").val("€ " + ui.values[1]);
        }
    });

    $("#amount-min").val("€ " + $("#slider-range").slider("values", 0));
    $("#amount-max").val("€ " + $("#slider-range").slider("values", 1));


    $("#slider-range-articles").slider({
        range: true,
        min: 8,
        max: 500,
        values: [8, 500],
        animate: true,
        step: 5,
        slide: function(event, ui) {
            $("#amount-min-articles").val("€ " + ui.values[0]);
            $("#amount-max-articles").val("€ " + ui.values[1]);
        }
    });

    $("#amount-min-articles").val("€ " + $("#slider-range-articles").slider("values", 0));
    $("#amount-max-articles").val("€ " + $("#slider-range-articles").slider("values", 1));


    /*
     *
     * side scroller */

    var $item = $('div.product'), //Cache your DOM selector
        visible = 2, //Set the number of items that will be visible
        index = 0, //Starting index
        endIndex = ($item.length / visible) - 1; //End index

    $('div#arrowR').click(function() {
        if (index < endIndex) {
            index++;
            $item.animate({
                'left': '-=600px'
            });
        }
    });

    $('div#arrowL').click(function() {
        if (index > 0) {
            index--;
            $item.animate({
                'left': '+=600px'
            });
        }
    });



    $(window).scroll(function() {
        scrollPosition = $(this).scrollTop();
        scrollposDiv = $('.container-articles').innerHeight();
        console.log(scrollPosition);

        if (scrollPosition >= 666) {
            $('.container-articles .products:last-child').clone().appendTo('.container-articles');
        }
    });

    $('#faq-overlay').scroll(function() {
        scrollPositionF = $(this).scrollTop();
        console.log(scrollPositionF);
    });


    $('.loadMore').on('click', function() {
        $('#scrollArea .scrollAppend:last-child').clone().appendTo('#scrollArea');
    });



})();
