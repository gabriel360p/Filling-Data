<?php

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/notes',function(){
    return Note::all();
});

Route::post('/notes',function(){
    return view();
});

Route::get('/notes/note/{note}',function(){
    return view();
});

Route::put('/notes/{note}',function(){
    return view();
});

Route::delete('/notes/{note}',function(){
    return view();
});