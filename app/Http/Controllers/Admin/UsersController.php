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
        
        public function profile(){
			$userprofile = User::find(1);
			return view('admin.users.profile',compact('userprofile'));
		}
        
		public function profile_update($id, Request $request){
			$request->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'dob' => 'required',
			'phone' =>  'required|numeric|digits:10',
			'email' => 'required',
			]);
			$users = User::find($id);
			$users->first_name = $request->first_name ? $request->first_name : '';
			$users->last_name = $request->last_name ? $request->last_name : '';
			$users->dob = $request->dob ? $request->dob : '';
			$users->phone = $request->phone ? $request->phone : '';
			$users->email = $request->email ? $request->email : '';
			if ($request->user_image != '') {
				$path = public_path() . '/uploads/users/';
				//code for remove old file
				if ($users->user_image != '' && $users->user_image != null) {
				$file_old = $path . $users->user_image;
				if (file_exists($file_old)) {
				unlink($file_old);
				}}
				
			if(!empty($request->user_image)){
				$fileName = time().'_user_image.'.$request->user_image->getClientOriginalExtension();
				$request->user_image->move(public_path('/assets/admin/img/users'), $fileName);
				$users->user_image = $fileName;
			}}
			
			// dd($users);
			$users->save();
			return redirect()->route('userProfile')->with('success','userProfile Has Been updated successfully');
		}
}
