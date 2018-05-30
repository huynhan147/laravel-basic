@extends('layouts.fontend')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">
                {{$post->title}}
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}</p>

        <p>{{ $post->body }}</p>
        <hr>
        <div class="comment">
            <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }} :
                    </strong>
                    {{ $comment->body }}
                </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="card">
            <div class="car-block">
                <form action="/posts/{{ $post->id }}/comments" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" id="" cols="98" rows="3" placeholder="Your comment here"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.blog-post -->



    </div>
    @endsection