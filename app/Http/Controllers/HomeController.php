<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use function Laravel\Prompts\select;

class HomeController extends Controller
{
    public function index()
    {


        $categories = Category::select('images', 'productTitle')->get();
        $articles= Article::select('title','img_slider', 'body')->get();
         $products = Product::select('images','product_title', 'product_price')->get();

        return view('master.index',
            ['categories' => $categories ,'articles'=> $articles ,'products'=>$products]);

    }

    public function shop()
    {
        $categories = Category::select('images', 'productTitle')->get();
        $articles= Article::select('title','img_slider', 'body')->get();
        $products = Product::select('images','product_title', 'product_price')->get();
        return view('master.shop'
        , ['categories' => $categories ,'articles'=> $articles ,'products'=>$products]);


    }
    public function article()
    {


//        $categories = Category::select('images', 'productTitle')->get();
        $articles= Article::select('title','img_slider', 'body')->get();
        $products = Product::select('images','product_title', 'product_price')->get();

        return view('master.article',
            ['articles'=> $articles ]);

    }



    public function contact()
    {
        return view('master.contact-us');


    }

    public function about()
    {
//    return     \request()->path();
        return view('master.about-us');
    }
    public function signup()
    {
        return view('master.signup');

    }
    public function login()
    {
        return view('master.login');

    }

    public function dashboard()
    {
        return view('master.dashboard');

    }
    public function productDetails()
    {
        $categories = Category::select('images', 'productTitle')->get();
        $articles= Article::select('title','img_slider', 'body')->get();
        $products = Product::select('images','product_title', 'product_price')->get();
        $comments = Comment::select('tittle' , 'description' ,'user_name')->get();
        return view('master.product-details'
            , ['categories' => $categories ,'articles'=> $articles ,'products'=>$products,'comments'=>$comments]);

    }

}
