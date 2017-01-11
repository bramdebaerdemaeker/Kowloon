@extends('layout')

@section('title')
  Kowloon - You supplier of animal products
@stop


@section('meta')
  <META NAME="Description" CONTENT="Find the most common questions and why we are so good in what we do">
@stop

@section('header')

    <!-- header image -->
    <div class="header">
        <div class="logo">
            <a href="/"><img src="img/carousel/logo.png" alt=""></a>
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
                        <p>about us</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- about -->
        <div class="row">
            <div class="col-xs-9 centered about">

                <div class="row">
                    <div class="col-md-12">
                        <div class="title uppercase">
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>

                <div class="row content">

                    <!-- about us text -->
                    <div class="col-md-8 col-xs-8">

                        <h4 class="uppercase">kowloon</h4>
                        <p>Pet Concept, active since 1998, is developing, importing and exporting products for pets worldwide</p>
                        <p>natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae sequi nesciunt.</p>

                    </div>


                    <!-- contact information -->
                    <div class="col-md-3 col-md-offset-1 col-xs-4">
                        <div class="contact">
                            <h4 class="uppercase">contact</h4>
                            <ul>
                                <li>Deckx Johan</li>
                                <li>Bosdreef 7</li>
                                <li>2200 Herentals</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- leave a message -->
        <div class="row">
            <div class="col-xs-9 centered message">

                <h4 class="uppercase">Leave us a message</h4>

                <form method="POST" action="{{ url('/about') }}">
                  {{ csrf_field() }}
                    <!-- email group -->
                    <div class="form-group">
                        <label for="InputEmail">E-mail</label>
                        <input type="email" class="form-control email" id="InputEmail" placeholder="name@domain.be">
                    </div>

                    <!-- text-area group -->
                    <div class="form-group">
                        <label for="Textarea">Your message</label>
                        <textarea class="form-control textarea" id="Textarea" rows="5" placeholder="Write your message here"></textarea>
                    </div>

                    <!-- button -->
                    <button type="button" name="submit" class="btn" id="validateMessage1"><b>Send</b></button>

                </form>
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

                <div class="link-to-more">
                    <a href=""><u>More questions?</u></a>
                </div>

            </div>
        </div>



@stop
