<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogListController extends Controller
{
    public function index()
    {
        return view("admin_panel/add_blog");
    }
}
