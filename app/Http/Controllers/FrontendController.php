<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Home(){
        return view('frontend.home');
    }
    public function Product(){
        return view('frontend.product');
    }

    public function Shopping(){
        return view('frontend.shoppingCard');
    }

    public function Blog(){
        return view('frontend.blog');
    }
    public function BlogDetail(){
        return view('frontend.blogDetail');
    }
    public function About(){
        return view('frontend.about');
    }
    public function Contact(){
        return view('frontend.contact');
    }
}
