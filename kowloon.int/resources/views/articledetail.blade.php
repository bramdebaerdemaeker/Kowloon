@extends('layout')

@section('content')

        <!-- intro logo -->
        <div class="row">

            <div class="col-md-7 intro centered ">
                <img src="img/carousel/logo.png" alt="Kowloon">
            </div>

        </div>

        <!-- details product -->
        <div class="detail">
            <div class="row">
                <div class="col-md-9 centered">

                    <div class="row">
                        <div class="col-md-6 product-big product-big-article">
                            <img src="img/hot_items/product_big.png">
                            <div class="row small-tumbs">
                                <div class="col-md-4">
                                    <img src="img/hot_items/product_big.png" class="test">
                                    woordje tekst
                                </div>
                                <div class="col-md-4">
                                    <img src="img/hot_items/product_big.png">
                                    woordje tekst
                                </div>
                                <div class="col-md-4">
                                    <div class="overlay-grey"></div>
                                    <img src="img/hot_items/product_big.png">
                                    woordje tekst
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row breadcrumb">
                                <div class="col-md-12">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="uppercase">cooling mat</h2>
                                    <span>€ 15, 49</span>
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
                                    <div class="obligatory">
                                        <div class="o-square"></div>
                                        <div class="o-circle"></div>
                                        <div class="o-triangle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-9 centered specifications">
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

        </div>

        <!-- related products -->
        <div class="row hot-products">
            <div class="col-md-9 centered">

                <!-- title -->
                <div class="row title">
                    <div class="col-md-12 uppercase">
                        <h4 class="uppercase">gerelateerde producten</h4>
                    </div>
                </div>

                <!-- products -->
                <div class="row products row-horizon">
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
                    <a href=""><u>View more</u></a>
                </div>

            </div>
        </div>

        <!-- FAQ -->
        <div class="row">
            <div class="col-md-9 centered questions">
                <div class="title">
                    <h4 class="uppercase">frequently asked questions</h4>
                </div>

                <div class="item">
                    <div class="row split">
                        <div class="col-md-11">
                            <h4>Dit is een vraag</h4>
                        </div>
                        <div class="col-md-1">
                            <i class="fa fa-sort-desc collapse rotate" id="rotate1" aria-hidden="true" data-toggle="collapse" data-target="#expend1"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div id="expend1" class="collapse out col-md-9 col-md-offset-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row split">
                        <div class="col-md-11">
                            <h4>Dit is een vraag</h4>
                        </div>
                        <div class="col-md-1 test1" data-icon="&#x25B6;">
                            <i class="fa fa-sort-desc collapse rotate" id="rotate2" aria-hidden="true" data-toggle="collapse" data-target="#expend2"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div id="expend2" class="collapse out col-md-9 col-md-offset-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row split">
                        <div class="col-md-11">
                            <h4>Dit is een vraag</h4>
                        </div>
                        <div class="col-md-1">
                            <i class="fa fa-sort-desc collapse rotate" id="rotate3" aria-hidden="true" data-toggle="collapse" data-target="#expend3"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div id="expend3" class="collapse out col-md-9 col-md-offset-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                        </div>
                    </div>
                </div>

                <div class="link-to-more">
                    <a href=""><u>More questions?</u></a>
                </div>
            </div>
        </div>

        <!-- newsletter -->
        <div class="row newsletter">
            <div class="col-md-9 centered">
                <div class="row">
                    <div class="col-md-8 adv">
                        <h1>discover amazing </br>Kowloon deals!</h1>
                        <h4 class="uppercase">only in our newsletter</h4>
                    </div>
                    <div class="col-md-4 subscribe">
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
