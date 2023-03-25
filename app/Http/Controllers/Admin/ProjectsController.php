<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Models\Project;
use App\Models\ProductImage;
use App\Models\Category;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

        public function __construct(){
            // $this->middleware('auth:admin');
            }

        public function index(){
            $data['projects'] = Project::orderBy('id','ASC')->paginate(10);
            return view('admin.project.index', $data); 
        }
            /**
            * Show the form for creating a new resource.
            *
            * @return \Illuminate\Http\Response
            */
            
        public function create(){
            $category = Category::all();
            return view('admin.project.create',compact('category'));
        }

            /**
            * Store a newly created resource in storage.
            *
            * @param  \Illuminate\Http\Request  $request
            * @return \Illuminate\Http\Response
            */

        public function store(Request $request){
            // $category = Category::find();
            // dd($request);
            $request->validate([
            'cat_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required'
            ]);
            $projects = new Project;
            $projects->cat_id = $request->cat_id;
            $projects->title = $request->title;
            $projects->slug = $request->slug;
            $projects->description = $request->description;
            $fileName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/projects'), $fileName);
            $projects->image = $fileName;
            $projects->is_featured = $request->is_featured ? $request->is_featured : 0;
            $projects->status = $request->status ? $request->status : 0;
            
            $projects->save(); 
            // dd($projects);  
            return redirect()->route('projectList')->with('success','Project has been created successfully.');
        }

            /**
            * Display the specified resource.
            *
            * @param  \App\Project  $project
            * @return \Illuminate\Http\Response
            */

        public function show(user $users){
            return view('admin.product.show',compact('user'));
        } 
            
            /**
            * Show the form for editing the specified resource.
            *
            * @param  \App\user  $users
            * @return \Illuminate\Http\Response
            */

        public function edit($id){  
            $projects = Project::find($id);
            $category = Category::all();
            return view('admin.project.edit',compact('projects','category'));
        }
            /**
            * Update the specified resource in storage.
            *
            * @param  \Illuminate\Http\Request  $request
            * @param  \App\Project  $project
            * @return \Illuminate\Http\Response
            */
        public function update($id, Request $request){
            $request->validate([
            'cat_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required'
            ]);
            $projects = Project::find($id);
            if($request->image != ''){ 
            $path = public_path().'/uploads/projects/';
            //code for remove old file
            if($projects->image != ''  && $projects->image != null){
            $file_old = $path.$projects->image;
            if(file_exists($file_old)){
            unlink($file_old);
            }
            }
            //upload new file
            if(!empty( $request->image)){
                $fileName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/projects'), $fileName);
                $projects->image = $fileName;
                }}
            $projects->cat_id = $request->cat_id;
            $projects->title = $request->title;
            $projects->slug = $request->slug;
            $projects->description = $request->description;
            $projects->is_featured = $request->is_featured;
            $projects->save();
            return redirect()->route('projectList')->with('success','Project Has Been updated successfully');
        }

            /**
            * Remove the specified resource from storage.
            *
            * @param  \App\Project  $project
            * @return \Illuminate\Http\Response
            */
        public function destroy($id){
            $projects = Project::find($id);
            $projects->delete();
            return redirect()->route('projectList')->with('success','projects has been deleted successfully');
        }

        public function project_status($id){
            $projects = Project::find($id);
            if($projects->status == 1){
            $projects->status = 0;
            } else {
            $projects->status = 1;
            } 
            $projects->save();
            return redirect()->route('projectList')->with('success','projects has been Status successfully');
        }

        public function project_featured_status($id){
            $projects = Project::find($id);
            if($projects->is_featured == 1){
            $projects->is_featured = 0;
            } else {
            $projects->is_featured = 1;
            } 
            $projects->save();
            return redirect()->route('projectList')->with('success','projects has been Featured successfully');
        }

            /**
            * Ramesh Singh
            * function to get images of passed product id
            */

        public function product_image($productId=null, Request $request){ 
            if($request->ajax() && $request->isMethod('post')){
                if($request->productFile != ''){ 
                    
                    $path = public_path().'/uploads/projects/';
                    //code for remove old file
                    if($request->productFile != ''  && $request->productFile != null){
                        $file_old = $path.$request->productFile;
                        if(file_exists($file_old)){
                            unlink($file_old);
                        }
                    }
                    //upload new file
                    $fileName = time().'.'.$request->productFile->getClientOriginalExtension();
                    if($request->productFile->move(public_path('uploads/projects/'), $fileName)){
                        if($request->productImageId){
                            $productImageData = ProductImage::find($request->productImageId);
                            $message = 'image updated successfully';
                        } else {
                            $productImageData = new ProductImage();
                            $message = 'image upload successfully';
                        }
                        // dd($productImageData);
                        $productImageData->product_id = $productId;
                        $imageWithUrl = $productImageData->image = $fileName;
                        $productImageData->status = 1;
                        $productImageData->save();
                        return response()->json(array('success'=>true, 'message'=>$message, 'image_id'=>$productImageData->id, 'img_url'=>$imageWithUrl));
                    } else {
                        return response()->json(array('success'=>false, 'message'=>'something went wrong', 'img_url'=>''));
                    }
                }
            }
            // dd($request);
            $productImages = ProductImage::where('product_id', $productId)->orderBy('id','desc')->get();
            // dd($productImages); 
            return view('admin.product.productimage', compact('productId','productImages'));
        }

}