@extends('app.masterPage')

@section('content')
    <div class="card text-center mt-4">
        <h1>Edit Post</h1>
    </div>
    <form method="POST" action="{{route('posts.update',['post' => $post->id])}}">
        @csrf
        @method('PUT')
        @include('posts.form')
        <div class="d-grid gap-2">
            <button class="btn btn-warning mt-4" type="submit">Upadte post</button>
        </div>
    </form>
@endsection