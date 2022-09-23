@extends('layouts.main')

@section('title','$post->title')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/posts/{{$post->image}}" class="img-fluid" alt="{{$post->title}}">
        </div>
            <div id="info-container" class="col-md-6">
            <h1>{{$post->title}}</h1>
            <p class="post-author">{{$postAuthor['name']}}</p>
            </div>
        <div class="col-md-12" id="description-container">
            <h3></h3>
            <p class="post-description">{{$post->description}}</p>
        </div>


        <div class="col-md-12">
            <h4>Comentarios</h4>

            @auth
                <div class="form-group">
                {{ $errors->first('comment') }}
                    <form action="{{route('comment'),$post->id}}" method="POST">
                        @csrf
                        <!--<input type="hidden" name="post_id" value="{{$post->id}}">-->
                        <textarea type="text" class="form-control" placeholder="Escrever um novo comentário" name="content" id="content"></textarea>
                        <input type="submit" class="btn btn-primary" value="Comentar">
                    </form>
                </div>
            @endauth
            <ul id="comments">
                @forelse($post->comments as $comment)
                <li>{{$comment->comment}}</li>
                @empty
                <li>Não tem nenhum comentário.</li>
                @endforelse
            </ul>
        </div>
        
    </div>
</div>

@endsection