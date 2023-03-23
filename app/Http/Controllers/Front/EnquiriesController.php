<?php

namespace App\Http\Controllers\Front;
use Auth;
use Mail;
use App\Mail\ContactMail;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;	

class EnquiriesController extends Controller{

    public function __construct(){
        // $this->middleware('auth:admin');
    }

	/**
	* 	Ramesh Singh
	*	Function to render Enquiry and it's content Enquiry dynamically
	*/
    public function index(){
        return view('front.home.index');
    }

	/**
	* 	Ramesh Singh
	*	Function to render Enquiry  Store and it's content Enquiry dynamically
	*/
	public function sendEmail(Request $request){
        // dd($request);
			$request->validate([
			'full_name' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'subject' => 'required',
			'message' => 'required'
		]);
		$contacts = new Enquiry;
		$contacts->full_name = $request->full_name;
		$contacts->email = $request->email;
		$contacts->phone = $request->phone;
		$contacts->subject = $request->subject;
		$contacts->message = $request->message;
		if($contacts->save()){
			Mail::to('admin@w3esolutions.com')->send(new ContactMail($contacts));
			
			
		}

			
		return redirect()->route('contactForm')->with('success','Your Enquiry has been sent, Admin will contact you soon.');
	}
}