<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostsController extends Controller
{
    public function index()
    {
        return view("admin/posts");
    }

    public function create()
    {
        return view("admin/posts/create");
    }

    public function show($id)
    {
        return view("admin/posts/show");
    }

    public function edit($id)
    {
        return view("admin/posts/edit");
    }

}
