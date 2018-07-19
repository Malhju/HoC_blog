<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         return view('admin.medias.index');
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
