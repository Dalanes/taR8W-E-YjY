<?php

use Illuminate\Support\Facades\Route;

Route::get("/", "CommentsController@index");

$methods = [
    "store"
];

Route::resource("/comments", "CommentsController")
    ->only($methods)
    ->names("comments");

