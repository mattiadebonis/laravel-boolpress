@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>

        @if($post->category)
            <a href="{{route('admin.categories.show', $post->category->id)}}">{{$post->category->name}}</a>
        @endif
        
        <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Modifica</a>
        <small>{{$post->slug}}</small>
        <div class="mt-4">{{$post->content}}</div>
        
        @if (count($post->tags) > 0)
            <div class="mt-3 h4">
                @foreach ($post->tags as $tag)
                    <span class="badge badge-pill badge-dark">{{ $tag->name }}</span>    
                @endforeach
            </div>
        @else
            <h5 class="mt-3">Nessun tag collegato</h5>    
        @endif

    
    </div>

@endsection