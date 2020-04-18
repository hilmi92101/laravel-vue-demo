<?php

namespace App\Http\Controllers\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    

	public function cssjs()
	{
		return view('tests.index');
	}

	public function checkVue()
	{
		return view('tests.check-vue');
	}

}
