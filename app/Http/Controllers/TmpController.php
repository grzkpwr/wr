<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TmpController extends Controller{
    public function tmp(){
        return view('tmp');
    }
}