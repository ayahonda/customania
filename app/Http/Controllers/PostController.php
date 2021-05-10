<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $form = $request->all();
        $data = ['user_id' => \Auth::id(), 'title' => $form['title'], 'body' => $form['body']];
        
        $data->save();

        return redirect('/');
    }
}
