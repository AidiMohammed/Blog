@extends('app.masterPage')

@section('content')

    <div class="card text-center mt-4">
        <h1>Create comment</h1>
    </div>
    <form method="POST" action="{{route('comments.store',['post' => $post])}}">
        @csrf
        @include('comments.form')
        <div class="d-grid gap-2">
            <button class="btn btn-primary mt-4" type="submit">Create comment</button>
        </div>
    </form>

@endsection