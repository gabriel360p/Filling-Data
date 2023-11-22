<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users',function(){
    return User::all();
});

Route::post('/users',function(){
    return view();
});

Route::get('/users/user/{user}',function(){
    return view();
});

Route::put('/users/{user}',function(){
    return view();
});

Route::delete('/users/{user}',function(){
    return view();
});