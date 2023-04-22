<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index(){
        return view('front.careers.index');
    }
    public function store(Request $request){
			$request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'contact_form' => 'required',
                'description' => 'required'
		]);
        $careers = new Career;
		$careers->name = $request->name;
		$careers->email = $request->email;
		$careers->phone = $request->phone;
		$fileName1 = time() . '_profile_image.' . $request->profile_image->getClientOriginalExtension();
		$request->profile_image->move(public_path('/uploads/front/careers'), $fileName1);
		$careers->profile_image = $fileName1;
		$careers->experience = $request->experience;
		$fileName2 = time() . '_resume.' . $request->resume->getClientOriginalExtension();
		$request->resume->move(public_path('/uploads/front/careers'), $fileName2);
		$careers->resume = $fileName2;
		$careers->contact_form = $request->contact_form;
		$careers->description = $request->description;
		$careers->status = $request->status ? $request->status : 0;
		$careers->save();
        return redirect()->route('careersDetails')->with('success','Your Enquiry has been sent, Admin will contact you soon.');
	}
}
