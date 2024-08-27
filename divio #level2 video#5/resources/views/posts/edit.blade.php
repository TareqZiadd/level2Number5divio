@extends('layout.app')

@section('content')
<div class="col-12">

    <center class="mt-4">
        <h1>Add Post</h1>
    </center>
</div>

<div class="col-8 mx-auto">
    <form action="{{ url('posts/'.$id) }}" method="POST" class="form border p-3">
        @method('Put')
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('success'))
    <h3 class='text-success'>{{ session('success') }}</h3>
@endif

        <div class="mb-3">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" name="title" id="title"
            value="{{ $post->title }}">

        </div>
        <div class="mb-3">
            <label for="description">Post Description</label>
            <textarea
            class="form-control" name="description"  rows="7">{{$post->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="user_id">Writer</label>
            <select name="user_id" class="form-control" id="user_id">
                <option value="1">Mostafa</option>
                <option value="2">Ali</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="form-control btn btn-primary">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection
