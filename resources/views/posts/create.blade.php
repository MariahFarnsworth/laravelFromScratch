@extends('layouts.app')

@section('content')
    <h1 class='title'>Create Post</h1>

    <form method="POST" action="/posts">
        {{csrf_field()}}

        <div class="field">

        <label class="label" for="title">Post Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Post Title" value="{{old('title')}}" required/>
            </div>
        </div>

        <div class="field">
        <label class="label" for="body">Post Body</label>
            
            <div class="control">
                <textarea name="body" class="textarea " placeholder="Post body" value="{{old('body')}}" required></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="btn btn-primary" type="submit" name="submit">Create Post</button>
            </div>
        </div>

    </form>
@endsection