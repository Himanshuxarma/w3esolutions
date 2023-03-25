<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
       
        $data['users'] = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index',$data);
    }
        
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
}
