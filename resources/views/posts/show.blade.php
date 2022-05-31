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
                <a class="btn btn-outline-info" href=""><i class="fa-solid fa-comment-dots"></i> Comment</a>
                <div>
                    <a class="btn btn-warning me-md-2"  href="{{route('posts.edit',['post' => $post->id])}}"><i class="fa-solid fa-pen-to-square"> </i> EDIT</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i> DELETE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i style="color: rgb(221, 30, 30)" class="fa-solid fa-exclamation fa-10x mb-4"></i>
                        <h5>Do you want to delete <strong style="color: rgb(221,30,30)">" {{$post->title}} "</strong>  ?</h5>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <form method="POST" action="{{route('posts.destroy',['post' => $post->id])}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELTETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection