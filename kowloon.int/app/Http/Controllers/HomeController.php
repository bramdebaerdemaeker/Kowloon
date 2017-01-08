<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;

class HomeController extends Controller
{
  // CookieJar $cookieJar, Request $request
    public function home()
    {
      return view ('welcome');
      // if($request->referrer)
      // {
      //   $cookieJar->queue(cookie('referrer', $request->referrer, 45000));
      //
      // }


    }

    public function about()
    {

      return view ('about');
    }

    public function productList()
    {

      return view ('dogarticle');
    }

    public function productDetail()
    {

      return view ('articledetail');
    }
}
