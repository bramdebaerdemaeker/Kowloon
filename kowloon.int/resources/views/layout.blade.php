<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Kowloon</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>

    <div class="sidenav" id="sidenav">
        <a id="nav-expend"><div class="nav-item nav-expend"></div></a>
        <a href="#" id="nav-search"><div class="nav-item search"></div><span class="sidenav-text">Search</span></a>
        <a href="#" id="nav-faq"><div class="nav-item faq"></div><span class="sidenav-text uppercase">faq</span></a>
        <a href="/about"><div class="nav-item contact"></div><span class="sidenav-text">Contact</span></a>
        <hr>
        <a href="dogarticles"><div class="nav-item dogarticle"></div><span class="sidenav-text">Dogs</span></a>
        <a href="#"><div class="nav-item catarticle"></div><span class="sidenav-text">Cats</span></a>
        <a href="#"><div class="nav-item fisharticle"></div><span class="sidenav-text">Fish</span></a>
        <a href="#"><div class="nav-item birdarticle"></div><span class="sidenav-text">Birds</span></a>
        <a href="#"><div class="nav-item smallarticle"></div><span class="sidenav-text">Small animals</span></a>

        <div class="nav-bottom">
            <a href="/"><img src="img/nav/k-big.png"></a>
        </div>
    </div>

    <!-- search overlay -->
    <div class="screen-overlay" id="search-overlay">
        <div class="screen-overlay-content">

            <!-- close tag -->
            <div class="close" id="close-screen-overlay">
                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
            </div>

            <!-- filter -->
            <div class="search-overlay-filter">
                <div class="row">
                    <div class="col-xs-9 centered">
                        <h3>Advanced filter &nbsp <i class="fa fa-sort-desc collapse rotate" aria-hidden="true" id="rotate4" data-toggle="collapse" data-target="#filterCollapse"></i></h3>
                    </div>
                </div>

                <div class="row">
                    <div id="filterCollapse" class="col-xs-8 col-xs-offset-1 centered collapse out">
                        <div class="collection">
                            <div class="row">
                                <div class="col-xs-6">
                                    <p>Category</p>
                                </div>
                            </div>

                            <div class="row">
                                <!-- checkbox filters -->
                                <div class="col-lg-6 col-md-8 filters">
                                    <div class="checkbox">
                                        <label><input type="checkbox">Dogs</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">Cats</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">Fish</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">Birds</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">Other</label>
                                    </div>
                                </div>

                                <!-- price slider -->
                                <div class="col-lg-6 col-xs-8">
                                    <div id="price-slider">
                                        <label for="amount">Price range</label>
                                        <div class="row">
                                            <div class="col-xs-12" id="slider-range"></div>
                                            <div class="row">
                                                <div class="col-xs-12 price-slider">
                                                    <input type="text" id="amount-min" readonly style="border:1px solid black; color:#000000; font-weight:normal;">
                                                    -
                                                    <input type="text" id="amount-max" readonly style="border:1px solid black; color:#000000; font-weight:normal;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <!-- search bar -->
            <div class="overlay-input">
                <div class="row">
                    <div class="col-xs-9 centered">

                        <div class="wrap">
                            <form action="" autocomplete="on">
                                <input id="search" name="search" type="text" placeholder="Just start typing and hit ... to search"><input id="search_submit" value="Rechercher" type="submit">
                            </form>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9 centered input-bar">
                        <div>
                            3 items found for the word "Crafted"
                        </div>
                        <div class="clear-overlay-input" id="clear-search-input">
                            <i class="fa fa-window-close-o" aria-hidden="true"></i>Clear
                        </div>
                    </div>
                </div>
            </div>

            <!-- results -->
            <div class="search-overlay-results">
                <div class="row">
                    <div class="col-xs-9 centered result">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9 centered result">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9 centered result">
                    </div>
                </div>
            </div>

            <!-- suggestions -->
            <div class="suggestion">
                <div class="row">
                    <div class="col-xs-9 centered">
                        Try checking spelling or tweaking it. Maybe use fewer words or a more general search term. </br> If you still have no luck you can contact our <a href="#">Customer service</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- faq overlay -->
    <div class="screen-overlay" id="faq-overlay">
        <div class="screen-overlay-content">

            <!-- close tag -->
            <div class="close" id="close-faq-overlay">
                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
            </div>

            <!-- search bar -->
            <div class="overlay-input">
                <div class="row">
                    <div class="col-xs-9 centered uppercase">
                        <h1>frequently asked questions</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9 centered">

                        <div class="wrap">
                            <form action="" autocomplete="on">
                                <input id="faq-search" class="faq-search"name="search" type="text" placeholder="Search on keyword"><input id="search_submit" value="Rechercher" type="submit">
                            </form>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-7 centered input-bar">
                        <div>

                        </div>
                        <div class="clear-overlay-input" id="clear-faq-input">
                            <i class="fa fa-window-close-o" aria-hidden="true"></i>Clear
                        </div>
                    </div>
                </div>
            </div>

            <!-- suggestions -->
            <div class="suggestion">
                <div class="row">
                    <div class="col-xs-9 centered">
                        Don’t find what you’re looking for? </br> You can always contact our <a href="#">customer service</a>. We’re happy to help you!
                    </div>
                </div>
            </div>

            <!-- results -->
            <div class="search-overlay-results">
                <div class="row">
                    <div class="col-xs-9 centered result">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Dit is een vraag</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9 centered result">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Dit is een vraag</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9 centered result">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Dit is een vraag</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- cookie overlay -->
    <div class="cookie-screen-overlay">
      <div class="cookie-overlay">

        <!-- cookie image -->
        <div class="cookie-image" id="cookie-overlay">
          <img src="img/cookie.png" alt="cookie crumble dog bone">
        </div>

        <!-- close tag -->
        <div class="cookie-close-tag cookie-close" id="close-cookie-overlay">
            <i class="fa fa-times fa" aria-hidden="true"></i>
        </div>

        <div class="cookie-content">
          <h1>Cookies</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Duis voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
          <button type="button" name="button" class="cookie-button cookie-close">ok, verder surfen</button>
        </div>
      </div>
    </div>




    <div class="container">
        @yield('header')
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
