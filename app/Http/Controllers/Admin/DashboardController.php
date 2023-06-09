<?php

namespace App\Http\Controllers\Admin;
use Auth;

use App\Models\User;
use App\Models\Page;
use App\Models\Enquiry;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Career;

use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function __construct(){
        // $this->middleware('auth:admin');
        }

        public function index(){
          $users = User::count();
          $pages = Page::count();
          $enquiry = Enquiry::select('created_at')->get();
          $rating = Testimonial::select('created_at')->get();
          $careers = Career::select('created_at')->get();
          $settings = Setting::count();
          return view('admin.dashboard.index',compact('users','pages','enquiry','settings','rating','careers'));
        }
}
?>