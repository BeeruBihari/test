<?php


Route::get('/AccessLevelBlade', function () {
    return view('AccessLevel.AccessLevelBlade');
});

Route::get('/LoginPage', function () {
    return view('AccessLevel.LoginPage');
});

Route::get('/PackagePurchedList', function () {		//BuyPackage 4
    return view('AccessLevel.PackagePurchedList');
});

Route::get('/ParticularPluginDetail', function () {		//BuyPackage 2
    return view('AccessLevel.ParticularPluginDetail');
});

Route::get('/Product', function () {		//BuyPackage 1
    return view('AccessLevel.Product');
});

Route::get('/SignupPage', function () {
    return view('AccessLevel.SignupPage');
});

Route::get('/Success', function () {		//BuyPackage 3
    return view('AccessLevel.Success');
});
