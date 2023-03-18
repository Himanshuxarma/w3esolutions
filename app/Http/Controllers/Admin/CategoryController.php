<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Models\Category;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){
        // $this->middleware('auth:admin');
   	}

		public function index(){
			$data['category'] = Category::orderBy('id', 'desc')->paginate(10);
			return view('admin.category.index', $data);
		}
			/**
			* Show the form for creating a new resource.
			*
			* @return \Illuminate\Http\Response
			*/
   		 public function create(){
			return view('admin.category.create');
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
			'slug' => 'required',
			'description' => 'required',
			'banner_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
			]);
			$category = new Category;
			$category->name = $request->name;
			$category->slug = $request->slug;
			$category->description = $request->description;
			$fileName = time() . '.' . $request->banner_image->getClientOriginalExtension();
			$request->banner_image->move(public_path('uploads/categories'), $fileName);
			$category->banner_image = $fileName;
			$category->status = $request->status ? $request->status : 0;
			$category->save();
			return redirect()->route('categoryList')->with('success', 'Category has been created successfully.');
		}
			/**
			 * Display the specified resource.
			 *
			 * @param  \App\Category  $product
			 * @return \Illuminate\Http\Response
			 */

		public function show(Category $users){
			return view('category.show', compact('category'));
		}
			/**
			* Show the form for editing the specified resource.
			*
			* @param  \App\Category  $category
			* @return \Illuminate\Http\Response
			*/
		public function edit($id){
			$category = Category::find($id);
			return view('admin.category.edit', compact('category'));
		}
			/**
			 * Update the specified resource in storage.
			 *
			 * @param  \Illuminate\Http\Request  $request
			 * @param  \App\Category  $product
			 * @return \Illuminate\Http\Response
			 */
		public function update($id, Request $request){
			$request->validate([
				'name' => 'required',
				'slug' => 'required',
				'description' => 'required'
				]);
				$category = Category::find($id);
				if ($request->banner_image != '') {
				$path = public_path() . '/uploads/categories/';
				//code for remove old file
				if ($category->banner_image != '' && $category->banner_image != null) {
				$file_old = $path . $category->banner_image;
				if (file_exists($file_old)) {
				unlink($file_old);
				}
				}
				//upload new file
				if(!empty($request->banner_image)){
				$fileName = time() . '.' . $request->banner_image->getClientOriginalExtension();
				$request->banner_image->move(public_path('uploads/categories'), $fileName);
				$category->banner_image = $fileName;
				}}
				$category->name = $request->name;
				$category->slug = $request->slug;
				$category->description = $request->description;
				$category->status = $request->status ? $request->status : 0;
				$category->save();
				return redirect()->route('categoryList')->with('success', 'Category Has Been updated successfully');
		}

			/**
			* Remove the specified resource from storage.
			*
			* @param  \App\Category  $product
			* @return \Illuminate\Http\Response
			*/

		public function destroy($id)
			{
			$category = Category::find($id);
			$category->delete();
			return redirect()->route('categoryList')->with('success', 'Category has been deleted successfully');
		}

		public function status($id){
			$category = Category::find($id);
			if ($category->status == 1) {
			$category->status = 0;
			} else {
			$category->status = 1;
			}
			$category->save();
			return redirect()->route('categoryList')->with('success', 'Category has been Status successfully');
		}
}