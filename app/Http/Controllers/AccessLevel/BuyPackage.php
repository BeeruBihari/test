<?php

namespace App\Http\Controllers\AccessLevel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\plugin_problem_suggestation_model;
use App\buy_package_model;

class BuyPackage extends Controller
{
    //plugin for showing product
    function makeProduct(){
        $list = DB::table('package_list_table')
        ->select('package_id','image_path','package_name','package_desc','package_cost')
        ->get();
        return view("AccessLevel.Product",['list'=>$list]);
    }

    function makeParticularPluginDetail($plugin_id){
        $plugin_info = DB::table('package_list_table')
        ->select( 'package_id','package_name', 'management_type', 'key_features', 'package_desc', 'package_cost', 'rating', 'validity', 'image_path')
        ->where("package_id","=",$plugin_id)
        ->get();
        return view("AccessLevel.ParticularPluginDetail",['plugin_data'=>$plugin_info]);

    }

    //search result for plugin
    function makeParticularPluginDetailLike($plugin_id){
        $plugin_info = DB::table('package_list_table')
        ->select( 'package_id','package_name', 'management_type', 'key_features', 'package_desc', 'package_cost', 'rating', 'validity', 'image_path')
        ->where('package_name', 'like', "%$plugin_id%")
        ->get();
        return view("AccessLevel.ParticularPluginDetail",['plugin_data'=>$plugin_info]);

    }

    function makeSuccess(){
        return view("AccessLevel.Success");
    }

    //plugin to make purchased list of particular clint
    function makePurchasedTableList($my_clint_id){
    	$package_list = DB::table('buy_package_table')
        ->join('package_list_table', 'package_list_table.package_id', '=', 'buy_package_table.package_id')
    	->select('buy_package_id as id', 'package_list_table.package_id as pc_id','package_name','buy_package_table.created_at as ca','expiry_date','running_status')
    	->where('my_clint_id','=',$my_clint_id)
    	->get();
    	return view("AccessLevel.PackagePurchedList",["package_list"=>$package_list,"clint_id"=>$my_clint_id]);
    }


    //ajax request to remove package form clint 
    function removeFromPurchasedList(Request $request){
        $status = DB::table('buy_package_table')
            ->where('buy_package_id', $request->package)
            ->update(['running_status' => 'false']);
        
    }
    
    //ajax to add to cart item
    function add_remove_cart(Request $request){
        $items = [];
        //geting the aaray
        if (Session::exists('cart')) {
            $items = Session::get('cart');
        }  

        if($request->work == "add"){
            //pusgin into the aaray
            array_push($items,$request->item);
        }elseif ($request->work == "remove") {
            //finding and deleteing from the aaray 
            if (($key = array_search($request->item, $items)) !== false) {
                unset($items[$key]);
            }
        }

        //again putting to the session
        Session::put('cart', $items);
        return response()->json(['status'=>1],201);
    }

    //ajax for searching account
    function searchResult($searchKey){
        $result = DB::table('package_list_table')
            ->select('package_name')
            ->where('package_name', 'like', "%$searchKey%")
            ->get();
        $resultArr = [];
        $i = 0 ;
        foreach($result as $key)
            $resultArr[$i++] = $key->package_name;
        return response()->json(['list'=>$resultArr],201);  
    }
    // for making suggestion and probelm list
    function insert_problem_suggestion(Request $request){
        plugin_problem_suggestation_model::insert(
            [   
                'my_clint_id' => $request->clint, 
                'package_id' => $request->package,
                'problem_or_suggestation' => $request->p_or_s, 
                'type' => $request->type
            ]
        );
    }

    //open payment gateway for paying
    function openPaymentGateway(){

        $_POST['firstname'] = "Aarav";
        $_POST['amount'] = 500;
        $_POST['email'] = "aaravonly4you@gmail.com";
        $_POST['phone'] = "8340669783";
        $_POST['productinfo'] = "product info";
        $_POST['surl'] = url('/')."/PaymentStatus";
        $_POST['furl'] = url('/')."/PaymentStatus";
        $_POST['txnid'] = "1-2-1";
        $_POST['key'] = "QrJSX8h2";
        $_POST['service_provider'] = 'payu_paisa';


        /* making hash */ 

        $MERCHANT_KEY = "QrJSX8h2";
        $SALT = "J3G8tzrUnt";
        // Merchant Key and Salt as provided by Payu.

        $PAYU_BASE_URL = "https://sandboxsecure.payu.in";       // For Sandbox Mode
        //$PAYU_BASE_URL = "https://secure.payu.in";            // For Production Mode

        $action = '';

        $posted = array();
        if(!empty($_POST)) {
            //print_r($_POST);
          foreach($_POST as $key => $value) {    
            $posted[$key] = $value; 
            
          }
        }

        $formError = 0;

        if(empty($posted['txnid'])) {
          // Generate random transaction id
          $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        } else {
          $txnid = $posted['txnid'];
        }
        $hash = '';
        // Hash Sequence
        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        if(empty($posted['hash']) && sizeof($posted) > 0) {
          if(
                  empty($posted['key'])
                  || empty($posted['txnid'])
                  || empty($posted['amount'])
                  || empty($posted['firstname'])
                  || empty($posted['email'])
                  || empty($posted['phone'])
                  || empty($posted['productinfo'])
                  || empty($posted['surl'])
                  || empty($posted['furl'])
                  || empty($posted['service_provider'])
          ) {
            $formError = 1;
          } else {
            //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
            $hashVarsSeq = explode('|', $hashSequence);
            $hash_string = '';  
            foreach($hashVarsSeq as $hash_var) {
              $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
              $hash_string .= '|';
            }

            $hash_string .= $SALT;


            $hash = strtolower(hash('sha512', $hash_string));
            $action = $PAYU_BASE_URL . '/_payment';
          }
        } elseif(!empty($posted['hash'])) {
          $hash = $posted['hash'];
          $action = $PAYU_BASE_URL . '/_payment';
        }

        /* ending making hash */

        if($formError == 1){
            echo "Form Submitation Error";
        }else{
            return view('AccessLevel.PayGo',[
                                                "MERCHANT_KEY"=>$MERCHANT_KEY,
                                                "hash"=>$hash,
                                                'txnid'=>$txnid,
                                                'firstname'=>$_POST['firstname'],
                                                'amount'=>$_POST['amount'],
                                                'email'=>$_POST['email'],
                                                'phone'=>$_POST['phone'],
                                                'productinfo'=>$_POST['productinfo'] ,
                                                'surl'=>$_POST['surl'],
                                                'furl'=>$_POST['furl']
                                            ]
                        );
        }

    }
    function payment_success_fail(){
        $status=$_POST["status"];
        //$firstname=$_POST["firstname"];
        $amount=$_POST["amount"];
        $txnid=$_POST["txnid"];
        //$posted_hash=$_POST["hash"];
        $productinfo=$_POST["productinfo"];
        ////$mobile=$_POST['mobile'];
        //$email=$_POST["email"];
        // appending timestamp to make unique id
        $payuMoneyId=$_POST["payuMoneyId"]."_".time();
        $mode=$_POST["mode"];
        
        $clint_package_validity = explode('-',$txnid);
        /* inserting success data in database */
        $date_y = date("Y")+$clint_package_validity[2];
        $date_m = date("m");
        $date_d = date("d");
        $expiry_date = $date_y."-".$date_m."-".$date_d;

        //time stamp for created at
        $t=time();
        $created_at = date("Y-m-d",$t);
        if($status = "success"){
            buy_package_model::insert(
                [   
                    'my_clint_id' => $clint_package_validity[0], 
                    'package_id' => $clint_package_validity[1],
                    'transaction_id' => $payuMoneyId, 
                    'payment_method' => $mode,
                    'price'=>$amount,
                    'running_status'=>"true",
                    'expiry_date' => $expiry_date,
                    'created_at' => $created_at,
                ]
            );
        }

        return view('AccessLevel.PaymentStatus',['status'=>$status,'amount'=>$amount,'productinfo'=>$productinfo,'payment_id'=>$payuMoneyId,'mode'=>$mode]);
    }
}
