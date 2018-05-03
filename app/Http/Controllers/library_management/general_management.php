<?php

namespace App\Http\Controllers\library_management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class general_management extends Controller
{
    private function Book_issue()
   	{
   		

   	}
   	private function Book_return()
   	{
   		
   	}
   	private function lost_book(){

   	}
   	private function fee_generate(){

   	}
   	private function query($array){

   	}
   	private function fee_generat()
   	{
   		
   	}
   	private function fee_submition(){

   	}
   	public function show()
   	{
   		return view('library_management.main');
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
