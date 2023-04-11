<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Models\Testimonial;

class ReviewsController extends Controller
{
    public function index(){
        return view('front.reviews.index');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            // 'email' => 'required',
            'description' => 'required'
        ]);
        $reviews = new Testimonial;
        $reviews->title = $request->title;
        $reviews->rating = $request->rating;
        $fileName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('/uploads/front/testimonials'), $fileName);
        $reviews->image = $fileName;
        $reviews->description = $request->description;
        $reviews->status = $request->status ? $request->status : 0;
        $reviews->save();
        return redirect()->route('reviewsDetails')->with('success','Your Reviews has been sent, Admin will contact you soon.');
    }
}
