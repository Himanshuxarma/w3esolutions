<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;	
use Mail;
use App\Mail\ReplyMail;

class EnquiriesController extends Controller{
	
    public function index(){		
		$data['contacts'] = Enquiry::orderBy('id')->paginate(10);
		return view('admin.enquiries.index',$data);
	}
	
	public function destroy($id){
		$enquiry = Enquiry::find($id);
		$enquiry->delete();
		return redirect()->route('enquiriesList')->with('success', 'Enquiry has been deleted successfully');
	}

	public function reply($id){
		$enquiryReply = Enquiry::find($id);
		return view('admin.enquiries.reply', compact('enquiryReply'));
	}

	public function enquiries_reply($id, Request $request){
		$request->validate([
			'reply' => 'required',
			
			]);
			$enquiryReply = Enquiry::find($id);
			$enquiryReply->reply = $request->reply;
			if($enquiryReply->save()){
				Mail::to('admin@w3esolutions.com')->send(new ReplyMail($enquiryReply));
				
				
			}
		return redirect()->route('enquiriesList')->with('success', 'reply Has Been updated successfully');
	}

		

}
