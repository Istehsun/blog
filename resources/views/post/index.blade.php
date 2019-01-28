@extends('layouts.master')



@section('content')


       @foreach($posts as $post)

        @include('post.article')
       
       @endforeach   


@endsection