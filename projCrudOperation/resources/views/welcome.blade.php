@extends('layouts.frontend')
@section('content')

 <div class="p-3 text-white rounded jumbotron p-md-5 bg-dark">
        <div class="px-0 col-md-6">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="my-3 lead">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="mb-0 lead"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="mb-2 row">

        @foreach ($posts as $post)
        <div class="col-md-6">
          <div class="mb-4 card flex-md-row box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              {{-- <strong class="mb-2 d-inline-block text-primary">World</strong> --}}
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{ $post->title }}</a>
              </h3>
              <div class="mb-1 text-muted">{{ date('Y-m-d',strtotime($post->created_at)) }}</div>
              <p class="mb-auto card-text">{{ $post->description }}</p>
              <a href="{{route('posts.show', $post->id )}}">Continue reading</a>
            </div>
          </div>
        </div>
        @endforeach
        
     
      </div>
    
@endsection