<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products',function(){
    return Product::all();
});

Route::post('/products',function(){
    return view();
});

Route::get('/products/product/{product}',function(){
    return view();
});

Route::put('/products/{product}',function(){
    return view();
});

Route::delete('/products/{product}',function(){
    return view();
});