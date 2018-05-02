<?php

namespace App\Http\Controllers\Book_plugin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Book_management extends Controller
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
   	private function AccNo()
   	{
   		# code...
   		return $AccNo;
   	}
   	private function catlogNo($BookName)
   	{
   		# code...

   		return $catlogNo;
   	}
   	private function show()
   	{
   		return view('library_management.Book');
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
 