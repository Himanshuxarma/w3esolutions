<?php

namespace App\Http\Controllers\Admin;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use Mail;
use App\Mail\CareerMail;

class CareerController extends Controller
{
    
    public function index(){
		$data['careers'] = Career::orderBy('id', 'ASC')->paginate(20);
		return view('admin.careers.index', $data);
	}
		/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/

    public function create(){
		return view('admin.careers.create');
	}
		/**
		* Store a newly created resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
    public function store(Request $request){
		$request->validate([
		'name' => 'required',
		'email' => 'required',
		'phone' => 'required',
		'profile_image' =>'required|image|mimes:jpeg,png,jpg|max:2048',
		'experience' => 'required',
		'resume' =>'required|image|mimes:jpeg,png,jpg|max:2048',
		'contact_form' => 'required',
		'description' => 'required'
		]);
		$careers = new Career;
		$careers->name = $request->name;
		$careers->email = $request->email;
		$careers->phone = $request->phone;
		$fileName1 = time() . '_profile_image.' . $request->profile_image->getClientOriginalExtension();
		$request->profile_image->move(public_path('/uploads/careers'), $fileName1);
		$careers->profile_image = $fileName1;
		$careers->experience = $request->experience;
		$fileName2 = time() . '_resume.' . $request->resume->getClientOriginalExtension();
		$request->resume->move(public_path('/uploads/careers'), $fileName2);
		$careers->resume = $fileName2;
		$careers->contact_form = $request->contact_form;
		$careers->description = $request->description;
		$careers->status = $request->status ? $request->status : 0;
		$careers->save();
		return redirect()->route('careersList')->with('success', 'Career has been created successfully.');
	}

		/**
		* Display the specified resource.
		*
		* @param  \App\Career  $Career
		* @return \Illuminate\Http\Response
		*/

 
    public function reply($id){
		$careersreply = Career::find($id);
		return view('admin.careers.reply', compact('careersreply'));
	}
		/**
		* Update the specified resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @param  \App\Career  $Career
		* @return \Illuminate\Http\Response
		*/

    public function careers_reply($id, Request $request){
		$request->validate([
			'reply' => 'required'
			]);
			$careers = Career::find($id);			
			$careers->reply = $request->reply;
			if($careers->save()){
				Mail::to('admin@w3esolutions.com')->send(new CareerMail($careers));
				}
			return redirect()->route('careersList')->with('success', 'Careers Reply Has Been updated successfully');
	}
		/**
		* Remove the specified resource from storage.
		*
		* @param  \App\Career  $careers
		* @return \Illuminate\Http\Response
		*/

    public function careers($id){
		$careers = Career::find($id);
		$careers->delete();
		return redirect()->route('careersList')->with('success', 'Careers has been deleted successfully');
	}

    public function careers_status($id){
		$careers = Career::find($id);
		if ($careers->status == 1) {
		$careers->status = 0;
		} else {
		$careers->status = 1;
		}
		$careers->save();
		return redirect()->route('careersList')->with('success', 'Careers has been Status successfully');
	}


}
