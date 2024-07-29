@extends('layouts.frontend')
@section('content')

<div class="mt-5 mb-5 text-center card">
    <div class="card-header">
      {{ $post->id }}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->description }}</p>
      
    </div>
    <div class="card-footer text-body-secondary">
        {{ date('Y-m-d',strtotime($post->created_at)) }}
    </div>
  </div>


@endsection