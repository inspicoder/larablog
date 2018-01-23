@extends('layouts.master')

@section('content')
	<h3 class="mt-4">{{$id->title}}</h1></a>

        <hr>

        <!-- Date/Time -->

        <p><strong>{{$id->user->name}}</strong> posted on {{$id->created_at->toFormattedDateString()}}</p>
        <hr>

        <!-- Post Content -->
        <p class="lead">{{$id->body}}</p>

        <hr>

         <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form method = "post" action="/posts/{{$id->id}}/comment">
                <div class="form-group">
                	{{csrf_field()}}
                  <textarea class="form-control" rows="3" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                @include('layouts.error')
              </form>
            </div>
          </div>

          @foreach($id->comments as $comment)
          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">{{$comment->user->name}}</h5>
              <p>Posted on {{$comment->human_readable_date()}}</p>
              {{$comment->body}}
            </div>
          </div>
          @endforeach
         <hr>

@endsection
