<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard() {
        $name  = "Sabbir Hossain";
        $email = "sabbir2dev@gmail.com";
//        return view( 'dashboard.dashboard', ['name' => $name, 'email'=> $email] );
        return view( 'dashboard.dashboard', compact( 'name' , 'email' ) );
    }

    function profile($id = 0) {
        $page    = request()->get('page', 10);
        $orderBy = request()->get('order', 'asc');
        return view( 'dashboard.profile', compact( 'id', 'page', 'orderBy' ) );
    }
}
