<?php

namespace App\Helpers;
use App\Models\Setting;
use App\Models\Project;
use App\Models\Banner;
use App\Models\Enquiry;
use App\Models\Career;
use App\Models\User;
use Route;
use Illuminate\Http\Request;

class Helper {

    public static function helperfunction1(){
        return "helper function 1 response";
    }

    public static function getSettings(){
        $settings= Setting::find(1);
        return $settings;
    }
    public static function getEnquiry(){
        $enquiry= Enquiry::all();
        return $enquiry;
    }
    public static function getCareer(){
        $careers= Career::count();
        return $careers;
    }
    public static function getUser(){
        $users= User::find(1);
        return $users;
    }


    public static function getProjectsByCategory($categoryId){
        $projects= Project::where('cat_id', $categoryId)->get();
        return $projects;
    }

    /**
     * Himanshu Sharma
     * Globally fetching banners
     */
    
    public static function getBanners(){
        
        $bannerType = "home_page";
        // echo Route::current()->getName(); die;
        if(Route::current()->getName() == 'serviceDetails'){
            $bannerType = "service_detail";
        }else if(Route::current()->getName()=='reviewsDetails'){
            $bannerType = "reviews";
        }else if(Route::current()->getName()== 'careersDetails'){
            $bannerType = "careers";
        }else if(Route::current()->getName()== 'projectDetails'){
            $bannerType = "project_detail";
        }
        $banners = Banner::where('page_name',$bannerType)->where('status', 1)->get();
        return $banners;
    }
}

?>