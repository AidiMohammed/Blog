<div class="form-group">
    <label class="form-label mt-4" id="title">Your title</label>
    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title',$post->title ?? null)}}" required>
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
    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="3" rows="10">{{old('content',$post->content ?? null)}}</textarea>
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