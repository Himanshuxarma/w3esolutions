<?php

namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectDetailController extends Controller
{
    public function index($id){
        $projects = Project::find($id);
        return view('front.project_detail.index',compact('projects'));
    }
}
