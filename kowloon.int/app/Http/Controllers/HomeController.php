<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home()
    {
      return view ('welcome');
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

    public function store(Request $request)
    {

      // return $request->all();
      $this->validate($request, [
        'email' => 'required|email|unique:users',
    ]);

      $user = new User;
      $user -> email = $request->email;
      $user->save();

      return redirect('/');
    }
}
