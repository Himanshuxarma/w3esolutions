<?php

namespace App\Http\Controllers\Admin;
use Auth;

use App\Models\User;
use App\Models\Page;
use App\Models\Enquiry;
use App\Models\Setting;

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
          $enquiry = Enquiry::count();
          $settings = Setting::count();
            return view('admin.dashboard.index',compact('users','pages','enquiry','settings'));
        }
}
?>