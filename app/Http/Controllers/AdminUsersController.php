<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $User = User::all();
        return view('admin.users.index', compact('User'));
    }

    public function create()
    {
        return view('admin.users.Create');
    }

    public function show($id)
    {
        $User::findOrFail($id);
        return view('admin.users.show', compact('User'));
    }

    public function edit($id)
    {   
        $User = User::findOrFail($id);
        return view('admin.users.edit', compact('User'));
    }

    public function store() 
    {

    }

    public function update() 
    {
        
    }

    public function delete() 
    {
        
    }
}

//store update delete