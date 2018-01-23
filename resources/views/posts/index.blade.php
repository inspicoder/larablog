@extends('layouts.master') 

@section('content')
@if(count($posts))
<!-- Heading -->
  @foreach($posts as $post)
        <a href="/posts/{{$post->id}}"><h3 class="mt-4">{{$post->title}}</h1></a>

        <hr>

        <!-- Date/Time -->

        <p><strong>{{$post->user->name}}</strong> posted on {{$post->formatted_date()}}</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">{{$post->body}}</p>

        <hr>
    @endforeach
@endif
@endsection
