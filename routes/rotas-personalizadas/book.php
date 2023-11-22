<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/books',function(){
    return Book::all();
});

Route::post('/books',function(){
    return view();
});

Route::get('/books/book/{book}',function(){
    return view();
});

Route::put('/books/{book}',function(){
    return view();
});

Route::delete('/books/{book}',function(){
    return view();
});