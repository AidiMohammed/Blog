@extends('app.masterPage')

@section('content')
    <div class="card mt-4 text-center">
        <h1>Create new post</h1>
    </div>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        @include('posts.form')
        <div class="d-grid gap-2">
            <button class="btn btn-primary mt-4" type="submit">Create post</button>
        </div>
    </form>
@endsection