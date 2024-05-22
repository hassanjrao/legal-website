<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Attorney;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\HomePage;
use App\Models\PracticeArea;
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

    public function aboutUs()
    {
        $aboutUs=AboutUs::first();
        $testimonials=Testimonial::latest()->get();
        $homePage=HomePage::first();
        return view('front.about',compact('aboutUs','testimonials','homePage'));
    }

    public function attorneys()
    {
        $attornies=Attorney::latest()->get();
        $homePage=HomePage::first();
        return view('front.attorneys',compact('attornies','homePage'));
    }

    public function practiceAreas()
    {
        $homePage=HomePage::first();
        $practiceAreas=PracticeArea::latest()->get();
        return view('front.practice-areas',compact('homePage','practiceAreas'));
    }

    public function caseStudies()
    {
        $homePage=HomePage::first();
        $caseStudies=CaseStudy::latest()->paginate(10);
        return view('front.case-studies',compact('homePage','caseStudies'));
    }

    public function blogs()
    {
        $homePage=HomePage::first();
        $blogs=Blog::latest()->paginate(10);
        return view('front.blogs',compact('homePage','blogs'));
    }

    public function contact()
    {
        $homePage=HomePage::first();
        return view('front.contact',compact('homePage'));
    }
}
