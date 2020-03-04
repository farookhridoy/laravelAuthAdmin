<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Session;
use DB;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $admin=Auth::guard()->user();
        $pageTitle = 'Admin Dashboard';

        
        return view("Admin::dashboard.index", compact('admin','pageTitle'));
    }

    public function documentation()
    {
        $pageTitle = 'Software Documentation';

        return view("Admin::layouts.documentation", compact('pageTitle'));
    }

    


}
