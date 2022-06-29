<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationPersonalController extends Controller
{
    public function __construnct(){
        $this->middleware(['auth']);
    }

    public function index(){
        return view('web.admin.user.information');
    }
}
