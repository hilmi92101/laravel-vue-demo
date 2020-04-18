<?php

namespace App\Http\Controllers\LearningVue;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    
    public function dataProperty()
    {

    	return view('learning-vue.data-property');
    }
}
