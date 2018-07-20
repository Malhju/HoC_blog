<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminPostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Posts = Post::all();
        return view('admin.posts.index', compact('Posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $User = User::findOrFail(Auth::id());
        $input = $request->all();
        $Post = new Post();
        $Post->title = $input['title'];
        $Post->content = $input['content'];
        $Post->photo_id = $input['photo_id'];
        $Post->is_active = $input['is_active'];
        $Post->category_id = $input['category_id'];
        $User->posts()->save($Post);
        return redirect()->route('posts.show', $Post->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Post = Post::findOrFail($id); 
        return view('admin.posts.show', compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('Post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Post = Post::findOrFail($id);
        $Post->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::whereId($id)->delete();
        return redirect()->route('admin.posts.index');
    }
}
