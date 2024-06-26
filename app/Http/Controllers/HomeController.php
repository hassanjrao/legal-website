<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Attorney;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\ContactUsUser;
use App\Models\HomePage;
use App\Models\Page;
use App\Models\PracticeArea;
use App\Models\Testimonial;
use App\Models\User;
use App\Notifications\ContactUsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $ContactUsUser=ContactUsUser::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        $admin=User::first();


        try{
        $admin->notify(new ContactUsNotification($ContactUsUser));
        }catch(\Exception $e)
        {
            Log::error('HomeController@contactSubmit: ',[
                'error'=>$e->getMessage(),
                'line'=>$e->getLine(),
                'stack'=>$e->getTraceAsString(),
            ]);
        }

        return back()->withToastSuccess('Message sent successfully');
    }

    public function caseStudy($id)
    {
        $caseStudy=CaseStudy::findorfail($id);
        $homePage=HomePage::first();
        return view('front.case-study',compact('caseStudy','homePage'));
    }

    public function blog($id)
    {
        $blog=Blog::findorfail($id);
        $homePage=HomePage::first();
        return view('front.blog',compact('blog','homePage'));
    }

    public function blogComment(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);


        $blog=Blog::findorfail($id);

        $blog->comments()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);

        return back()->with('success','Comment added successfully');
    }

    public function page($slug)
    {
        $page=Page::where('slug',$slug)->first();
        if(!$page)
        {
            abort(404);
        }
        $homePage=HomePage::first();
        return view('front.page',compact('page','homePage'));
    }
}
