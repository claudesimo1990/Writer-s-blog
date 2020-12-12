@extends('layouts.app')

@section('content')

@foreach ($posts as $post)

<div class="card my-5">
  @if ($post->hasThumbnail())
    <a href="{{ route('posts.show', $post)}}">
      <img class="card-img-top" src="{{ url('storage/' .$post->thumbnail->id. '/' .$post->thumbnail->file_name) }}" alt="{{ $post->thumbnail->file_name }}">
    </a>
  @endif
  <div class="card-body">
      <h3 class="card-title">{{ $post->title }}</h3>
      <p class="card-text">{!! $post->content !!}</p>
      <a href="{{ route('posts.show', ['post' => $post->slug ]) }}" class="btn btn-primary">lire la suite &rarr;</a>
  </div>
  <div class="card-footer text-white text-muted bg-primary"><small class="text-muted">{{ humanize_date($post->posted_at) }}</small> <span class="text-white float-right font-weight-light font-weight-bold">Auteur : {{ $post->author->name }}</span> </div>
</div>
    
@endforeach

{{ $posts->links() }}

@endsection
