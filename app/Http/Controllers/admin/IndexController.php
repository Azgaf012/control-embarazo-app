<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construnct(){
        $this->middleware(['auth']);
    }

    public function index(){
        return view('web.admin.index');
    }
}
