<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Attorney;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\HomePage;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homePage=HomePage::first();
        $aboutUs=AboutUs::first();
        $caseStudies=CaseStudy::latest()->take(6)->get();
        $attornies=Attorney::latest()->take(4)->get();
        $testimonials=Testimonial::latest()->get();
        $blogs=Blog::latest()->take(3)->get();
        
        return view('front.index',compact('homePage','aboutUs','caseStudies','attornies','testimonials','blogs'));
    }
}
