<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    

    public function getPaginateUser(Request $request)
    {
    	// count all users
    	$total_users 	= User::count();

    	// formula
    	$clicked_page 	= $request->clickedPageNum;
    	$offset 		= ($clicked_page - 1) * 10; 
    	$users 			= User::skip($offset)->take(10)->get();

    	$data = [
			'status' => true,
			'request' => $request->all(),
			'page_num' => $request->clickedPageNum,
			'users' => $users
		];

		return response()->json($data); 

    }
}
