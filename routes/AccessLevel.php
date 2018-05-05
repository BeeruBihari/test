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
Route::get('/ParticularPluginDetail/','AccessLevel\BuyPackage@makeParticularPluginDetail');

//BuyPackage 3
Route::get('/Success','AccessLevel\BuyPackage@makeSuccess');

//BuyPackage 4
Route::get('/PackagePurchedList/{clint_id}','AccessLevel\BuyPackage@makePurchasedTableList');

Route::get('/SignupPage', function () {
    return view('AccessLevel.SignupPage');
});

