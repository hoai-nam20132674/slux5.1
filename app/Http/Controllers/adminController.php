<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class adminController extends Controller
{
    
    public function index()
    {
        return View('frontEndAdmin.page-content.index');
    }

    
}
