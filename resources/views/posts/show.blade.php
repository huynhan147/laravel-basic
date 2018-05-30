@extends('layouts.fontend')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">
                {{$post->title}}
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}</p>

        <p>{{ $post->body }}</p>
    </div><!-- /.blog-post -->


    </div>
    @endsection