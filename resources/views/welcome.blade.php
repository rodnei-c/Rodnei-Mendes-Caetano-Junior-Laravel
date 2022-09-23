@extends('layouts.main')

@section('title','DoutBlog')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Procurar alguma postagem</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar">
    </form>
</div>
<div id="posts-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>Postagens Recentes</h2>
    @endif
    <div id="cards-container" class="row">
    @foreach($posts as $post)
    <div class="card col-md-3">
        <img src="/img/posts/{{$post->image}}" alt="{{$post->title}}">
        <div class="card-body">
            <p class="card-date">22/09/2022</p>
            <h5 class="card-title">{{$post->title}}</h5>
            <a href="/posts/{{$post->id}}" class="btn btn-primary">Saber mais</a>
        </div>
    </div>
    @endforeach
    @if(count($posts) == 0 && $search)
    <p>Nenhuma postagem foi escontrada!</p>
    @elseif(count($posts) == 0)
    <p>Nenhuma postagem :(</p>
    @endif
    </div>
</div>
@endsection