@extends('layout')

@section('content')

        <!-- logo -->
        <div class="row">

            <div class="col-md-7 intro centered ">
                <a href="/"><img src="img/carousel/logo.png" alt="Kowloon"></a>
            </div>

        </div>

        <!-- details product -->

        <div class="row">
          <div class="col-md-9 centered">

            <div class="container-article-detail">

              <div class="container-article-detail-left">
                <div class="image-big">
                  <img src="img/hot_items/product_big.png">
                </div>
                <div class="images-small">
                  <div class="image-left">
                    <img src="img/hot_items/product_big.png">
                    <p>woordje tekst</p>
                  </div>
                  <div class="image-center">
                    <img src="img/hot_items/product_big.png">
                    <p>woordje tekst</p>
                  </div>
                  <div class="image-right">
                    <img src="img/hot_items/product_big.png">
                    <p>woordje tekst</p>
                  </div>
                </div>
              </div>

              <div class="container-article-detail-right">
                <div class="breadcrumb">
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

                <div class="article-specifications">
                  <div class="title">
                    <h2 class="uppercase">cooling mat</h2>
                  </div>
                  <div class="price">
                    <span>€ 15, 49</span>
                  </div>
                  <div class="colors">
                      <p>Colors</p>
                      <div class="circles">
                          <div class="circle1"></div>
                          <div class="circle2"></div>
                          <div class="circle3"></div>
                      </div>
                  </div>
                  <div class="description">
                    <h4>Description</h4>
                    <p>Hier komt een de volledige beschrijvende tekst met een max. aantal karakters. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea clit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat consectetur.</p>
                  </div>
                </div>
                <div class="obligatory">
                  <div class="o-square"></div>
                  <div class="o-circle"></div>
                  <div class="o-triangle"></div>
                </div>
              </div>

            </div>

          </div>

        </div>

        <!-- specifications -->
        <div class="row">
            <div class="col-md-9 centered dimentions">
                <h4>Specifications</h4>
                <p class="uppercase">dimensions</p>
                <p class="offset-left-1">
                    <span class="dimensions">S - Ø 53x18cm </span>
                    <span class="dimensions">M - Ø 53x18cm</span>
                    <span class="dimensions">L - Ø 53x18cm</span>
                </p>
                <p class="uppercase">titel</p>
                <p class="offset-left-1">$-Hier komt technische tekst</p>
            </div>
        </div>


        <!-- related products -->
        <div class="row hot-products side-scroll-container">
            <div class="col-xs-9 centered">

                <!-- title -->
                <div class="row title">
                    <div class="uppercase">
                        <h4 class="uppercase">gerelateerde producten</h4>
                    </div>
                </div>
                <div class="left-arrow" id="arrowL"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></div>
                <div class="right-arrow" id="arrowR"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></div>

                <!-- products -->
                <div class="row products row-horizon products-container">
                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>
                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>

                    <div class="product">
                        <div class="overlay-dog"></div>
                        <img src="img/hot_items/product-dog.png">
                    </div>
                </div>

                <div class="link-to-more">
                    <a href=""><u>View more</u></a>
                </div>

            </div>
        </div>

        <!-- FAQ -->
        <div class="row">
            <div class="col-xs-9 centered questions">
                <div class="title">
                    <h4 class="uppercase">frequently asked questions</h4>
                </div>

                <div class="item">
                    <div class="row split">
                        <div class="col-xs-11">
                            <h4>Dit is een vraag</h4>
                        </div>
                        <div class="col-xs-1">
                            <i class="fa fa-sort-desc collapse rotate" id="rotate1" aria-hidden="true" data-toggle="collapse" data-target="#expend1"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div id="expend1" class="collapse out col-xs-9 col-xs-offset-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row split">
                        <div class="col-xs-11">
                            <h4>Dit is een vraag</h4>
                        </div>
                        <div class="col-xs-1 test1" data-icon="&#x25B6;">
                            <i class="fa fa-sort-desc collapse rotate" id="rotate2" aria-hidden="true" data-toggle="collapse" data-target="#expend2"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div id="expend2" class="collapse out col-xs-9 col-xs-offset-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row split">
                        <div class="col-xs-11">
                            <h4>Dit is een vraag</h4>
                        </div>
                        <div class="col-xs-1">
                            <i class="fa fa-sort-desc collapse rotate" id="rotate3" aria-hidden="true" data-toggle="collapse" data-target="#expend3"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div id="expend3" class="collapse out col-xs-9 col-md-offset-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- newsletter -->
        <div class="row newsletter">
            <div class="col-lg-9 col-xs-9 centered">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-xs-7 adv">
                        <h1>discover amazing </br>Kowloon deals!</h1>
                        <h4 class="uppercase">only in our newsletter</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-5 subscribe">
                        <h3>Subscribe to our newsletter</h3>
                        <span>Lorem ipsum dolor sit amet...</span>

                        <form class="form-subscribe" method="POST" action="{{ url('/email') }}">
                          {{ csrf_field() }}
                            <input type="text" name="email" placeholder="Your e-mail">
                            <button type="button" name="submit">OK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
