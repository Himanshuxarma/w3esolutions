<?php

namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Techstack;
use App\Models\Project;
use App\Models\Banner;
use App\Models\Testimonial;

class ServiceDetailController extends Controller
{
    public function index($id){
        $services = Service::find($id);
        $techstacks = Techstack::all();
        $projects = Project::all();
        $banner = Banner::where('page_name','about-us')->get();
        $testimonials = Testimonial::where('status',1)->get();
        return view('front.service_detail.index',compact('services','techstacks','projects','banner','testimonials'));
    }
}
