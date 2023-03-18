<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Domain;
use App\Models\Category;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index(){
		$data['domains'] = Domain::orderBy('id', 'desc')->paginate(10);
		return view('admin.domains.index', $data);
	}
		/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/

    public function create(){
        $category = Category::all();
		return view('admin.domains.create',compact('category'));
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
		'project_done' => 'required',
		'technology' => 'required',
		'description' => 'required'
		]);
		$domains = new Domain;
		$domains->name = $request->name;
		$domains->project_name = $request->project_name;
		$domains->technology = $request->technology;
		$domains->description = $request->description;
		$domains->status = $request->status ? $request->status : 0;
		$domains->save();
		return redirect()->route('domainsList')->with('success', 'Domain  has been created successfully.');
	}

		/**
		* Display the specified resource.
		*
		* @param  \App\Domain  $Domain
		* @return \Illuminate\Http\Response
		*/

    public function show(Domain $Domain){
		return view('page.show', compact('page'));
	}

		/**
		* Show the form for editing the specified resource.
		*
		* @param  \App\Domain  $Domain
		* @return \Illuminate\Http\Response
		*/

    public function edit($id){
		$domains = Domain::find($id);
		return view('admin.domains.edit', compact('domains'));
	}

		/**
		* Update the specified resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @param  \App\Domain  $Domain
		* @return \Illuminate\Http\Response
		*/

    public function update($id, Request $request){
		$request->validate([
		'technology' => 'required',
		'tech_icon' => 'required',
		'description' => 'required'
		]);
		$domains = Domain::find($id);
		$domains->technology = $request->technology;
		$domains->tech_icon = $request->tech_icon;
		$domains->description = $request->description;
		$domains->save();
		return redirect()->route('domainsList')->with('success', 'Tech Stacks Has Been updated successfully');
	}

		/**
		* Remove the specified resource from storage.
		*
		* @param  \App\Domain  $domains
		* @return \Illuminate\Http\Response
		*/

    public function domains($id){
		$domains = Domain::find($id);
		$domains->delete();
		return redirect()->route('domainsList')->with('success', 'Tech Stacks has been deleted successfully');
	}

    public function domains_status($id){
		$domains = Domain::find($id);
		if ($domains->status == 1) {
		$domains->status = 0;
		} else {
		$domains->status = 1;
		}
		$domains->save();
		return redirect()->route('domainsList')->with('success', 'Tech Stacks has been Status successfully');
	}


}
