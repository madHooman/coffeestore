<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Pruduct;

class LoginController extends Controller
{
    public function index()
    {


        $categories = Category::select('images', 'productTitle')->get();
        $articles= Article::select('title','img_slider', 'body')->get();
         $products = Pruduct::select('images','product_title', 'product_price')->get();

        return view('master.index',
            ['categories' => $categories ,'articles'=> $articles ,'products'=>$products]);






    }



    public function contact()
    {
        return view('master.contact-us');


    }


    public function signup()
    {
        return view('master.signup');

    }
    public function login()
    {
        return view('master.login');

    }

}
