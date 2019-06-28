@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1 class='title'>{{$post->title}}</h1>
   <div>
       {{$post->body}}
   </div>
   <hr>
   <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
   <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

<form method="POST" action="/posts/{{$post->id}}" style="float: right">
    {{method_field('DELETE')}}
    {{csrf_field()}}

    <div class="field">
        <div class="control">
            <button class="btn btn-danger" type="submit" name="submit">Delete Post</button>
        </div>
    </div>

</form>
@endsection