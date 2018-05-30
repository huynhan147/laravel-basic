<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function store(Post $post){
//        dd();
//        dd($post->id);
//        $post->addComment(request('body'),request('id'));
        Comment::create([
            'post_id'=>request()->id,
           'body'=>request('body')

        ]);
        return back();
    }
}
