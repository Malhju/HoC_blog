<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMediasController extends Controller
{
    public function index()
    {
         return view('admin/medias/index');
    }

    public function create()
    {
        return view('admin/medias/upload');
    }

    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }

    public function edit($id)
    {
        return view('admin/medias/edit');
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy()
    {
        return view('admin/medias/delete');
    }
}
