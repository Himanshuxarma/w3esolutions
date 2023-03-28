<?php

namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectTechnologies;

class ProjectDetailController extends Controller
{
    public function index($id){
        // $projects = Project::where('id', $id)->with(['technology'])->first();  
        // $technology  = ProjectTechnologies::where('project_id',$data['project_id'])->where('id','!=', $id)->get();
        // dd($technology); 
        $projects = Project::find($id);
        $technologydata = ProjectTechnologies::all();
        return view('front.project_detail.index',compact('projects','technologydata'));
    }
}
