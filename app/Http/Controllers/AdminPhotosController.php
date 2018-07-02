<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class AdminPhotosController extends Controller
{
    public function index()
    {
        $Photos = Photo::all();
        return view('admin.photos.index', compact('Photos'));
    }

    public function upload(Request $request, $id)
    {
        $Photos = Photo::findOrFail($id);
        $Photos->update($resquest->all());
    }

    public function destroy($id)
    {
        Photo::whereId($id)->delete();
        return redirect()->route('admin.dashboard');
    }
}
