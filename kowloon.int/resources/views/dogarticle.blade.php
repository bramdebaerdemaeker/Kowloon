@extends('layout')

@section('title')
  Kowloon - Dog products
@stop

@section('meta')

  <META NAME="Description" CONTENT="Ontdek de grote verscheidenheid aan producten en wat hen zo goed maakt!">

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

        <!-- breadcrumbs -->
        <div class="row breadcrumb">
            <div class="col-xs-9 centered">

                <div class="indicator">
                    <div>
                        <a href="/"><img src="img/about/k.png"></a>
                    </div>
                    <div class="tag">
                        <div class="circle-category-dog"></div>
                        <p>Dogs</p>
                    </div>
                    <div class="tag2">
                        <p>Splash 'n fun</p>
                    </div>

                </div>

            </div>
        </div>


        <!-- filter -->
        <div class="row">
            <div class="col-xs-9 centered filter">

                <h2 class="uppercase">dog articles.</h2>

                <div class="row">
                    <div class="col-md-12">
                        <p>Filter &nbsp <i class="fa fa-sort-desc collapse rotate" aria-hidden="true" id="rotate5" data-toggle="collapse" data-target="#filterCollapseArticle"></i></p>
                    </div>
                </div>

                <div class="row">
                    <div id="filterCollapseArticle" class="col-xs-10 col-xs-offset-1 collapse out">
                        <div class="collection">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>By collection</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 filters">
                                    <div class="checkbox">
                                        <label><input type="checkbox">Splash 'n Fun</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">Luxury</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">New</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">On sale</label>
                                    </div>

                                    <div class="checkbox">
                                        <label><input type="checkbox">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="range" id="price-slider">
                            <label for="amount">Price range</label>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div id="slider-range-articles"></div>
                                </div>
                                <div class="col-md-5 col-xs-12 price-slider-articles">
                                    <input type="text" id="amount-min-articles" readonly>
                                    <p>-</p>
                                    <input type="text" id="amount-max-articles" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <hr width="75%">

        <!-- sort by -->
        <div class="row">
            <div class="col-sm-9 col-xs-12 centered">

                <div class="row sort">

                    <div class="col-sm-2">
                        <select class="selectpicker">
                            <option selected="selected" >Sort by relevance</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                            <option>Latest</option>
                            <option>Oldest</option>
                        </select>

                    </div>

                    <div class="col-xs-2 col-xs-offset-8 nomobile">
                        Dog items:
                    </div>

                </div>
            </div>
        </div>

        <!-- articles -->
        <div class="row">
            <div class="col-xs-9 centered dogarticle">

                <div class="container container-articles">
                  <div class="left">
                    <div class="upper">
                      <div class="upper-left product">
                            <a href="dogarticles/cooling-mat"><div class="overlay-dog"></div></a>
                            <div class="circles">
                                <div class="circle1"></div>
                                <div class="circle2"></div>
                                <div class="circle3"></div>
                            </div>
                            <img src="img/hot_items/product-dog.png" alt="cooling mat">
                            <p>Cooling mat <span>€15,49</span></p>
                      </div>
                      <div class="upper-right product">
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

                    <div class="under">
                      <div class="under-left product">
                            <a href="dogarticles/cooling-mat"><div class="overlay-dog"></div></a>
                            <div class="circles">
                                <div class="circle1"></div>
                                <div class="circle2"></div>
                                <div class="circle3"></div>
                            </div>
                            <img src="img/hot_items/product-dog.png" alt="cooling mat">
                            <p>Cooling mat <span>€15,49</span></p>
                      </div>
                      <div class="under-right product">
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
                  </div>

                  <div class="right">
                    <div class="product-big-article grote">
                        <img src="img/hot_items/product_big.png" alt="cooling mat">
                        <h4>Cooling mat</h4>
                        <p>Hier komt een deel van de beschrijvende tekst die bij elk product hoort. Ook terug te vinden in het product detail. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius....</p>
                        <span>€15,49</span>
                        <button type="submit" class="btn-big-dog"><b>Want to know more?</b></button>
                    </div>
                  </div>


                  <div class="products">
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

                  </div>

                </div>

            </div>
        </div>
@stop
