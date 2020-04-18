<?php

namespace App\Http\Controllers\LearningVue;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    
    public function index()
    {

    	return view('learning-vue.index');
    }
}
