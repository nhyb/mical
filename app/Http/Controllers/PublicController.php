<?php

namespace App\Http\Controllers;
use App\Post as Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function indexPost()
    {
        return view('posts')->with('posts', \DB::table('posts')->orderBy('created_at', 'desc')->get());
    }
}
