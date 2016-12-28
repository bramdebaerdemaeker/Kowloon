@extends('layout')

@section('header')

    <!-- carousel -->
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">


        <div class="logo">
            <a href="index.html"><img src="img/carousel/logo.png" alt="Kowloon"></a>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
            </div>
        </div>

    </div>

@stop


@section('content')

        <!-- intro text -->
        <div class="row">

            <div class="col-lg-7 col-md-10 col-xs-9  intro centered ">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

        </div>

        <!-- categories -->
        <div class="row">
            <div class="col-lg-9 col-xs-12 centered categories">

                <!-- dogs -->
                <a href="dogarticles"><div class="col-md-2 col-xs-1 animal dogcategory">
                        <p class="uppercase">dogs</p>
                    </div></a>


                <!-- cats -->
                <a href="#"><div class="col-md-2 col-xs-1 animal catcategory">
                        <p class="uppercase">cats</p>
                    </div></a>

                <!-- fish -->
                <a href="#"><div class="col-md-2 col-xs-1 animal fishcategory">
                        <p class="uppercase">fish</p>
                    </div></a>

                <!-- birds -->
                <a href="#"><div class="col-md-2 col-xs-1 animal birdcategory">
                        <p class="uppercase">birds</p>
                    </div></a>

                <!-- small animals -->
                <a href="#"><div class="col-md-2 col-xs-1 animal smallcategory">
                        <p class="uppercase kek">small </br> animals</p>
                    </div></a>

                <!-- extra -->
                <a href="#"><div class="col-md-2 col-xs-1 animal othercategory">
                        <p class="uppercase">other</p>
                    </div></a>
            </div>
        </div>

        <!-- hot products -->
        <div class="row hot-products">
            <div class="col-md-9 centered">

                <!-- title -->
                <div class="row title">
                    <div class="col-md-12 uppercase">
                        <h1>hot items.</h1>
                    </div>
                </div>

                <!-- products -->
                <div class="row products">
                    <div class="product nomobile">
                        <div class="overlay-dog"></div>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product1.png">
                        <p>Cooling mat <span>€15,49</span></p>
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product1.png">
                        <p>Cooling mat <span>€15,49</span></p>
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product1.png">
                        <p>Cooling mat <span>€15,49</span></p>
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product1.png">
                        <p>Cooling mat <span>€15,49</span></p>
                    </div>

                </div>

                <div class="link-to-more">
                    <a href=""><u>Visit the store</u></a>
                </div>

            </div>
        </div>

        <!-- newsletter -->
        <div class="row newsletter">
            <div class="col-lg-9 col-md-9 col-xs-11 col-xs-11-offset-1 centered">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-xs-5 adv">
                        <h1>discover amazing </br>Kowloon deals!</h1>
                        <h4 class="uppercase">only in our newsletter</h4>
                    </div>
                    <div class="col-lg-4 col-md-5 col-xs-7 subscribe">
                        <h3>Subscribe to our newsletter</h3>
                        <span>Lorem ipsum dolor sit amet...</span>

                        <form class="form-subscribe">
                            <input type="text" name="email" placeholder="Your e-mail">
                            <button type="button" name="submit">OK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@stop
