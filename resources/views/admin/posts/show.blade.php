@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Modifica</a>
        <small>{{$post->slug}}</small>
        <div class="mt-4">{{$post->content}}</div>
        
    </div>

@endsection