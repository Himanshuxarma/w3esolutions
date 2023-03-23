<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Techstack;
use Illuminate\Http\Request;

class TechstacksController extends Controller
{
    public function index(){
		$data['techstacks'] = Techstack::orderBy('id', 'asc')->paginate(20);
		return view('admin.techstacks.index', $data);
	}
		/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/

    public function create(){
		return view('admin.techstacks.create');
	}
		/**
		* Store a newly created resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
    public function store(Request $request){
		$request->validate([
		'technology' => 'required',
		'tech_icon' =>'required|image|mimes:jpeg,png,jpg|max:2048',
		'description' => 'required'
		]);
		$techstacks = new Techstack;
		$techstacks->technology = $request->technology;
		$fileName = time() . '.' . $request->tech_icon->getClientOriginalExtension();
		$request->tech_icon->move(public_path('/uploads/techstacks'), $fileName);
		$techstacks->tech_icon = $fileName;
		$techstacks->description = $request->description;
		$techstacks->status = $request->status ? $request->status : 0;
		$techstacks->save();
		return redirect()->route('techstacksList')->with('success', 'Tech Stacks has been created successfully.');
	}

		/**
		* Display the specified resource.
		*
		* @param  \App\Techstack  $techstack
		* @return \Illuminate\Http\Response
		*/

    public function show(Techstack $techstack){
		return view('page.show', compact('page'));
	}

		/**
		* Show the form for editing the specified resource.
		*
		* @param  \App\Techstack  $techstack
		* @return \Illuminate\Http\Response
		*/

    public function edit($id){
		$techstacks = Techstack::find($id);
		return view('admin.techstacks.edit', compact('techstacks'));
	}

		/**
		* Update the specified resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @param  \App\Techstack  $techstack
		* @return \Illuminate\Http\Response
		*/

    public function update($id, Request $request){
		$request->validate([
			'technology' => 'required',
			'description' => 'required'
			]);
			$techstacks = Techstack::find($id);
			if ($request->tech_icon != '') {
			$path = public_path() . '/uploads/techstacks/';
			//code for remove old file
			if ($techstacks->tech_icon != '' && $techstacks->tech_icon != null) {
			$file_old = $path . $techstacks->tech_icon;
			if (file_exists($file_old)) {
			unlink($file_old);
			}}
			//upload new file
			if(!empty( $request->tech_icon)){
			$fileName = time() . '.' . $request->tech_icon->getClientOriginalExtension();
			$request->tech_icon->move(public_path('uploads/techstacks'), $fileName);
			$techstacks->tech_icon = $fileName;
			}}
			$techstacks->technology = $request->technology;
			$techstacks->description = $request->description;
			$techstacks->status = $request->status ? $request->status : 0;
			$techstacks->save();
		return redirect()->route('techstacksList')->with('success', 'Tech Stacks Has Been updated successfully');
	}

		/**
		* Remove the specified resource from storage.
		*
		* @param  \App\Techstack  $techstacks
		* @return \Illuminate\Http\Response
		*/

    public function techstacks($id){
		$techstacks = Techstack::find($id);
		$techstacks->delete();
		return redirect()->route('techstacksList')->with('success', 'Tech Stacks has been deleted successfully');
	}

    public function techstacks_status($id){
		$techstacks = Techstack::find($id);
		if ($techstacks->status == 1) {
		$techstacks->status = 0;
		} else {
		$techstacks->status = 1;
		}
		$techstacks->save();
		return redirect()->route('techstacksList')->with('success', 'Tech Stacks has been Status successfully');
	}


}
