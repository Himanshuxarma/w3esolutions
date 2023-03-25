<?php

namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceDetailController extends Controller
{
    public function index($id){
        $services = Service::find($id);
        return view('front.service_detail.index',compact('services'));
    }
}
