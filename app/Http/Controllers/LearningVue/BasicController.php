<?php

namespace App\Http\Controllers\LearningVue;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class BasicController extends Controller
{
    
    public function index()
    {

    	return view('learning-vue.index');
    }


    public function axios()
    {

    	$users = User::all();

    	return response()->json($users);
    }

}
