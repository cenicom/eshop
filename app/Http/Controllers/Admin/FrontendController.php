<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('admin.index');
    }

}
