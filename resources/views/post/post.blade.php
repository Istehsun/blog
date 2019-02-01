@extends('layouts.master')


@section('content')

<hr>

  <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}  <h2 href="#">UserName: {{$post->user->name}}</h2></p>

           {{$post->body}}

          </div>



@endsection
