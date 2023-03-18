<?php

namespace App\Helpers;
use App\Models\Setting;

class Helper {

    public static function helperfunction1(){
        return "helper function 1 response";
    }

    public static function getSettings(){
        $settings= Setting::find(1);
        return $settings;
    }
}

?>