<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CategoryDescription;

class CategoryController extends Controller
{
    public function getCategory()
    {

        return view('partials.category')->with(["title" => "Work And Joy", "meta_keywords" => "Moderní responzivní design, Moderní webové stránky, úspěšné internetové obchody, Opencart",
            "meta_description" => "Moderní responzivní design pro vás, moderní responzivní design, úspěšné internetové obchody, Wordpress, Drupal, moderní eshop Opencart a další..."]);;

    }
}
