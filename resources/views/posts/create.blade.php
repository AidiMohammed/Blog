@extends('app.masterPage')

@section('content')
    <div class="card mt-4 text-center">
        <h1>Create new post</h1>
    </div>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label class="form-label mt-4" id="title">Your title</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}" required>
            @error('title')
                <div class="invalid-feedback">
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            @if (strpos($err,'title'))
                                {{$err}}
                            @endif
                        @endforeach
                    @endif
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label mt-4" for="content">Post content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="3" rows="10">{{old('content')}}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            @if (strpos($err,'content'))
                                {{$err}}
                            @endif
                        @endforeach
                    @endif
                </div>
            @enderror
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary mt-4" type="submit">Create post</button>
        </div>
    </form>
@endsection