<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Blogcontroller extends Controller
{

    public function index() {
        return view ('blog.index');
    }
    public function showFormation() {
        return view ('page.formation');
    }


}
