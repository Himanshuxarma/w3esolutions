<?php

namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\Page;
use App\Models\Service;
use App\Models\Employee;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Faq;

class HomeController extends Controller
{
    public function __construct(){
        // $this->middleware('auth:admin');
    }
	
	/**
	* 	Ramesh Singh
	*	Function to render homepage and it's content dynamically
	*/

    public function index(){
        $category = Category::where('status',1)->get();
        $services = Service::where('status',1)->get();
        $testimonials = Testimonial::where('status',1)->get();
        $employees = Employee::where('status',1)->get();
        $aboutPage = Page::where('slug', 'about-us')->first();
        $faqs = Faq::where('status',1)->get();
        return view('front.home.index',compact('category','aboutPage','services','employees','testimonials','faqs'));
    }
}
