<?php
namespace App\Http\View\Composers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class SettingComposer{

    public function compose(){

        if(Session::has('main_logo')){

            // do nothing

        }else{

            $main_logo =DB::table('config')->where('key','logo')->first();

            Session::put('main_logo',$main_logo);  

        }

        if(Session::has('shortcut_icon')){

            // do nothing

        }else{

            $shortcut_icon =DB::table('config')->where('key','short.cut.icon')->first();

            Session::put('shortcut_icon',$shortcut_icon);  

        }

        if(Session::has('site_name')){

            // do nothing

        }else{

            $site_name =DB::table('config')->where('key','site.name')->first();

            Session::put('site_name',$site_name);  

        }

        if(Session::has('weekend')){

            // do nothing

        }else{

            $weekend =DB::table('config')->where('key','weekend')->first();

            Session::put('weekend',$weekend);  

        }

                    


    }

}
