@extends('app.masterPage')

@section('content')
    <div class="card text-center mt-4">
        <h1>Detail post</h1>
    </div>
    <div class="card mt-2">
        <div class="d-flex justify-content-between">
            <div class="m-2">{{$post->title}} </div>
            <em class="m-2">{{$post->created_at->diffForHumans()}}</em>
        </div>
        <div class="card-body">
                {{$post->content}}
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <a class="btn btn-outline-info" href="{{route('comments.create',['post' => $post->id])}}"><i class="fa-solid fa-comment-dots"></i> Comment</a>
                <div>
                    <a class="btn btn-warning me-md-2"  href="{{route('posts.edit',['post' => $post->id])}}"><i class="fa-solid fa-pen-to-square"> </i> EDIT</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDaletPost"><i class="fa-solid fa-trash-can"></i> DELETE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- list Comments -->
    <div class="card text-center mt-2">
        <h2>List comments</h2>
    </div>
    <div class="row">
        @forelse ($comments as $comment)
            <div class="col-sm-6">
                <div class="card mt-2">
                    <div class="d-flex justify-content-between">
                        <div class="m-2">Admin</div>
                        <em class="m-2">{{$post->created_at->diffForHumans()}}</em>
                    </div>
                    <div class="card-body">
                        {{$comment->content}}
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <a href="{{route('comments.edit',['comment' => $comment->id])}}" class="btn btn-warning me-md-2"><i class="fa-solid fa-pen-to-square"></i> EDIT</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDaletComment"><i class="fa-solid fa-trash-can"></i> DELETE</button>
                        </div>
                    </div>
                </div>
            </div>
            @include('comments.modalConfirmDelet')
        @empty
            <div class="text-center mt-4">
                <h2>
                    <span class="badge rounded-pill bg-primary">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#exclamation-triangle-fill"/></svg> No Comment
                    </span>
                </h2>
            </div>
        @endforelse
    </div>    
    @include('posts.modalConfirmDelet') 
@endsection