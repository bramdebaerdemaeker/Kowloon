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
                                <div class="col-md-6 col-xs-10">
                                    <div id="slider-range-articles"></div>
                                </div>
                                <div class="col-md-5 col-xs-10 price-slider-articles">
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
            <div class="col-xs-9 centered">

                <div class="row sort">

                    <div class="col-md-2">
                        <select class="selectpicker">
                            <option selected="selected" >Sort by relevance</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                            <option>Latest</option>
                            <option>Oldest</option>
                        </select>

                    </div>

                    <div class="col-md-2 col-md-offset-8">
                        Dog items:
                    </div>

                </div>
            </div>
        </div>

        <!-- articles -->
        <div class="row">
            <div class="col-xs-9 centered dogarticle">

                <!-- <div class="row">
                    <div class="col-md-6 col-xs-12">

                        <div class="row products">
                            <div class="col-md-6 col-xs-4">
                                <a href="articledetail">
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
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-4">
                              <a href="articledetail">
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
                              </a>
                            </div>
                        </div>

                        <div class="row products">
                            <div class="col-md-6 col-xs-4">
                              <a href="articledetail">
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
                              </a>
                            </div>
                            <div class="col-md-6 col-xs-4">
                                <a href="articledetail">
                                  <div class="product product-spread">
                                      <div class="overlay-dog"></div>
                                      <div class="circles">
                                          <div class="circle1"></div>
                                          <div class="circle2"></div>
                                          <div class="circle3"></div>
                                      </div>
                                      <img src="img/hot_items/product1.png">
                                      <p>Cooling mat <span>€15,49</span></p>
                                  </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 tet3">
                        <div class="product-big-article">
                            <img src="img/hot_items/product_big.png">
                            <h4>Cooling mat</h4>
                            <p>Hier komt een deel van de beschrijvende tekst die bij elk product hoort. Ook terug te vinden in het product detail. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius....</p>
                            <span>€15,49</span>
                            <button type="submit" class="btn-big"><b>Want to know more?</b></button>
                        </div>
                    </div>
                </div> -->

                <div class="container container-articles">
                  <div class="links">
                    <div class="boven">
                      <div class="bovenste-links">
                        bovenste links
                      </div>
                      <div class="bovenste-rechts">
                        bovenste rechts
                      </div>
                    </div>

                    <div class="onder">
                      <div class="onderste-links">
                        onderste links
                      </div>
                      <div class="onderste-rechts">
                        onderste rechts
                      </div>
                    </div>
                  </div>

                  <div class="rechts">
                    <div class="grote">
                      grote
                    </div>
                  </div>

                </div>

            </div>
        </div>
@stop
