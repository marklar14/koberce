<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index')->with(["title" => "Work And Joy", "meta_keywords" => "Moderní responzivní design, Moderní webové stránky, úspěšné internetové obchody, Opencart",
        "meta_description" => "Moderní responzivní design pro vás, moderní responzivní design, úspěšné internetové obchody, Wordpress, Drupal, moderní eshop Opencart a další..."]);;
});
