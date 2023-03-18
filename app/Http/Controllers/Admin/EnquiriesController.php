<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;	

class EnquiriesController extends Controller{
	
    public function index(){		
		$data['contacts'] = Enquiry::orderBy('id')->paginate(10);
		return view('admin.enquiries.index',$data);
	}
		

}
