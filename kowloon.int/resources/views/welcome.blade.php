@extends('layout')

@section('title')
  Kowloon - You supplier of animal products
@stop

@section('meta')
  <META NAME="Description" CONTENT="Kowloon is een leverancier van kwaliteitsvolle producten voor dierenwinkels. We hebben verkooppunten in heel België!">
@stop

@section('header')

    <!-- carousel -->
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">


        <div class="logo">
            <a href="/"><img src="img/carousel/logo.png" alt="Kowloon"></a>
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

            <div class="col-lg-7 col-md-10 col-sm-9 col-xs-12 intro centered ">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

        </div>

        <!-- categories -->
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 centered categories">

                <!-- dogs -->
                <a href="dogarticles" title="All dog articles">
                  <div class="category-space col-sm-2">
                    <div class=" animal dogcategory"></div>
                      <p class="uppercase">dogs</p>
                  </div>
                </a>


                <!-- cats -->
                <a href="#" title="All cat articles">
                  <div class="category-space col-sm-2">
                    <div class=" animal catcategory"></div>
                      <p class="uppercase">cats</p>
                  </div>
                </a>

                <!-- fish -->
                <a href="#" title="All fish articles">
                  <div class="category-space col-sm-2">
                    <div class=" animal fishcategory"></div>
                      <p class="uppercase">fish</p>
                  </div>
                </a>

                <!-- birds -->
                <a href="#" title="All bird articles">
                  <div class="category-space col-sm-2">
                    <div class="animal birdcategory"></div>
                      <p class="uppercase">birds</p>
                  </div>
                </a>

                <!-- small animals -->
                <a href="#" title="All small animal articles">
                  <div class="category-space col-sm-2">
                    <div class=" animal smallcategory"></div>
                      <p class="uppercase except">small </br> animals</p>
                  </div>
                </a>

                <!-- extra -->
                <a href="#" title="All other articles">
                <div class="category-space col-sm-2 no-border">
                  <div class=" animal othercategory"></div>
                    <p class="uppercase">other</p>
                </div>
                </a>
            </div>
        </div>

        <!-- hot products -->
        <div class="row hot-products">
            <div class="col-md-9  col-sm-10 centered">

                <!-- title -->
                <div class="row title">
                    <div class="uppercase">
                        <h1>hot items.</h1>
                    </div>
                </div>

                <!-- products -->
                <div class="row products">
                    <div class="product nomobile">
                        <a href="dogarticles/cooling-mat"><div class="overlay-dog"></div></a>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product-dog.png" alt="cooling mat">
                        <p>Cooling mat <span>€15,49</span></p>
                    </div>

                    <div class="product">
                        <a href="dogarticles/cooling-mat"><div class="overlay-dog"></div></a>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product-dog.png" alt="cooling mat">
                        <p>Cooling mat <span>€15,49</span></p>
                    </div>

                    <div class="product">
                        <a href="dogarticles/cooling-mat"><div class="overlay-dog"></div></a>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product-dog.png" alt="cooling mat">
                        <p>Cooling mat <span>€15,49</span></p>
                    </div>

                    <div class="product product-spread">
                        <a href="dogarticles/cooling-mat"><div class="overlay-dog"></div></a>
                        <div class="circles">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <img src="img/hot_items/product-dog.png" alt="cooling mat">
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
            <div class="col-md-9 col-sm-10 centered">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-7 col-xs-12 adv">
                        <h1>discover amazing </br>Kowloon deals!</h1>
                        <h4 class="uppercase">only in our newsletter</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-5 col-xs-12 subscribe">
                        <h3>Subscribe to our newsletter</h3>
                        <span>Lorem ipsum dolor sit amet...</span>

                        <form class="form-subscribe" method="POST" action="{{ url('/email') }}">
                          {{ csrf_field() }}
                            <input type="text" name="email" placeholder="Your e-mail" id="newsletterInput">
                            <button type="submit" name="submit">OK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@stop
