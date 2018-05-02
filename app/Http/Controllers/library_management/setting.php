<?php

namespace App\Http\Controllers\library_management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class setting extends Controller
{
    private function show()
   	{
   		return view('library_management.mainView');
   	}
   	public function calling($call_val){

   		switch ($call_val) {
   			case '0':
   				show();
   				break;
   			default:
   				return "invalid Choice";
   				break;
   		} 
   	}
}
