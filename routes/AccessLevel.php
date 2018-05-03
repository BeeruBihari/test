<?php


Route::get('/AccessLevelBlade', function () {
    return view('AccessLevel.AccessLevelBlade');
});

Route::get('/LoginPage', function () {
    return view('AccessLevel.LoginPage');
});

Route::get('/PackagePurchedList', function () {
    return view('AccessLevel.PackagePurchedList');
});

Route::get('/ParticularPluginDetail', function () {
    return view('AccessLevel.ParticularPluginDetail');
});

Route::get('/Product', function () {
    return view('AccessLevel.Product');
});

Route::get('/SignupPage', function () {
    return view('AccessLevel.SignupPage');
});

Route::get('/Success', function () {
    return view('AccessLevel.Success');
});
