<?php

namespace App\Http\Controllers\AccessLevel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BuyPackage extends Controller
{
    function makePurchasedTableList($parent_clint_id){
    	$parent_clint_id = 1;
    	$list = DB::table('parent_clint_list_table')
    	->select('package_list_json')
    	->where('parent_clint_id','=',$parent_clint_id)
    	->get();
    	echo $list;
    	return view("AccessLevel.PackagePurchedList");
    }
    
    function makeParticularPluginDetail(){
    	return view("AccessLevel.ParticularPluginDetail");
    }

    function makeProduct(){
    	return view("AccessLevel.Product");
    }

    function makeSuccess(){
    	return view("AccessLevel.Success");
    }
}
