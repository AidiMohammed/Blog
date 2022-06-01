@extends('app.masterPage')

@section('content')
    <div class="card text-center mt-4">
        <h1>Edit comment</h1>
    </div>
    <form method="POST" action="{{route('comments.update',['comment' => $comment->id])}}">
        @csrf
        @method('PUT')
        @include('comments.form')
        <div class="d-grid gap-2">
            <button class="btn btn-primary mt-4" type="submit">Update</button>
        </div>
    </form>
@endsection