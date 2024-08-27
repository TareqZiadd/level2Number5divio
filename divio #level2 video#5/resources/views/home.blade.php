@extends('layout.app')

@section('content')



<center><h1>All Posts</h1> </center>

<div class="col-12 mt-5">

    @foreach ($posts as $post)
    <div class="card">
        <span class="m-2">userName : {{ $post->user->name }} - {{ $post->created_at->format('Y-m-d') }}</span>
        <hr>
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ \Str::limit($post->description,50) }}</p>
          <a href="posts/{{ $post->id }}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      @endforeach

</div>
<div>{{ $posts->links() }}
</div>
@endsection



