<?php

namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Techstack;
use App\Models\Project;

class ServiceDetailController extends Controller
{
    public function index($id){
        $services = Service::find($id);
        $techstacks = Techstack::all();
        $projects = Project::all();
        return view('front.service_detail.index',compact('services','techstacks','projects'));
    }
}
