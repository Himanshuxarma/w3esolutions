<?php

namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    public function index(){
        return view('front.projectdetail.index');
    }
}
