@extends('layout.app')

@section('content')


<h1> <span style="color:rgb(98, 0, 255)">Post Title :</span> {{ $post->title }}</h1>
<div class="col-12 mt-5">

    <div class="card">
        <span class="m-2">User_ID:{{ $post->user_id }} - {{ $post->created_at->format('Y-m-d') }}</span>
        <span class="m-2">UserName:{{ $post->user->name }} - {{ $post->created_at->format('Y-m-d') }}</span>
        <span class="m-2">userEmail:{{ $post->user->email }} </span>
        <span class="m-2">userpassword:{{ $post->user->password}} </span>

        <hr>
        <div class="card-body">
          <h3 class="card-title" style="color:red">{{ $post->title }}</h3>
          <p class="card-text">{{ $post->description }}</p>
        </div>
      </div>

</div>

@endsection



