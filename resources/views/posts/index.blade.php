@extends('layouts.app')

@section('content')
    <h1 class='title'>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card-body bg-light border">
                <div class="row">
                    <div class="col-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    
                    <div class="col-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written or {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
           
            </div>
        @endforeach
    @else
        <p>No Posts Found</p>
    @endif
@endsection