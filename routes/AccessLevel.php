<?php


Route::get('/AccessLevelBlade', function () {
    return view('AccessLevel.AccessLevelBlade');
});

Route::get('/LoginPage', function () {
    return view('AccessLevel.LoginPage');
});

//BuyPackage 1
Route::get('/Product','AccessLevel\BuyPackage@makeProduct');

//BuyPackage 2
Route::get('/ParticularPluginDetail/{plugin_id}','AccessLevel\BuyPackage@makeParticularPluginDetail');

//BuyPackage 3
Route::post('/PaymentStatus','AccessLevel\BuyPackage@payment_success_fail');

// Route::get('/PaymentStatus',function(){
// 	return view('AccessLevel.PaymentStatus');
// });

//BuyPackage 4
Route::get('/PackagePurchedList/{clint_id}','AccessLevel\BuyPackage@makePurchasedTableList');

//ajax for removing package 
Route::get('/removeFromList','AccessLevel\BuyPackage@removeFromPurchasedList');

//report and suggestion 
Route::get('/problem_suggestion','AccessLevel\BuyPackage@insert_problem_suggestion');

//ajax add_remove_cart
Route::get('/add_remove_cart','AccessLevel\BuyPackage@add_remove_cart');

//ajax for searching 
Route::get('/searchResult/{searchKey}','AccessLevel\BuyPackage@searchResult');

//search result
Route::get('/particularPluginDetailLike/{plugin}','AccessLevel\BuyPackage@makeParticularPluginDetailLike');

//payment getway buy backage
Route::POST('/payment_getway','AccessLevel\BuyPackage@openPaymentGateway');

//testing url 
Route::get('/test','AccessLevel\BuyPackage@test');

Route::get('/SignupPage', function () {
    return view('AccessLevel.SignupPage');
});



// new user  develope  
Route::get('AccessLevel/new', function () {
    return view('AccessLevel.NewAccessType');
});
