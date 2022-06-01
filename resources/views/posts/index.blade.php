@extends('app.masterPage')

@section('content')
    <div class="card mt-4 text-center">
        <h1> List Posts</h1>
    </div>

    <div class="row mt-2">
        @forelse ($posts as $post)
            <div class="col-sm-6">    
                <div class="list-group mb-2">
                    <a href="{{route('posts.show',['post' => $post->id])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$post->title}}</h5>
                            <small class="text-muted">Created at : {{$post->created_at}}</small>
                        </div>
                        <p>{{$post->content}}</p>
                        <div class="text-end">
                            @if ($post->comments_count)
                                <span href="#" class="badge bg-info position-relative">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{$post->comments_count}}</span>
                                    Comments
                                </span>
                            @else
                                <span class="badge bg-secondary">No comment</span>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        @empty
    </div>
        <div class="text-center mt-4">
            <h2>
                <span class="badge rounded-pill bg-primary">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#exclamation-triangle-fill"/></svg> List is empty
                </span>
            </h2>
        </div>
    @endforelse
@endsection