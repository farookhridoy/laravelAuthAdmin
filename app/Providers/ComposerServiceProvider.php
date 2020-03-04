<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        View::composer('Admin::*', 'App\Http\View\Composers\SettingComposer');
        
    }



    public function register(){
        //
    }


}