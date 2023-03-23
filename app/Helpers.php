<?php

namespace App\Helpers;
use App\Models\Setting;
use App\Models\Project;
use App\Models\Banner;

class Helper {

    public static function helperfunction1(){
        return "helper function 1 response";
    }

    public static function getSettings(){
        $settings= Setting::find(1);
        return $settings;
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
        $banner = Banner::where('status',1)->get();
        return $banner;
    }
}

?>