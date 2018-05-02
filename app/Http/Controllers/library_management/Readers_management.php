<?php

namespace App\Http\Controllers\library_management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Readers_management extends Controller
{
    private function adding()
   	{
   		
   	}
   	private function Modify()
   	{
   		
   	}
   	private function delete()
   	{
   		# code...
   	}
   	private function Id()
   	{
   		# code...
   		return $id;
   	}
   	private function show()
   	{
   		return view('library_management.Reader');
   	}
   	public function calling($call_val){

   		switch ($call_val) {
   			case '0':
   				show();
   				break;
   			case '1':
   				adding();
   				break;
   			case '2':
   				Modify();
   				break;
   			case '3':
   				delete();
   				break;
   			default:
   				return "invalid Choice";
   				break;
   		} 
   	}
}
