@extends('layouts.main')

@section('title','Editando: '.$post->title)

@section('content')

<div id="post-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$post->title}}</h1>
    <form action="/posts/update/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="/img/posts/{{$post->image}}" alt="{{$post->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Título da postagem" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrição da postagem">{{$post->description}}</textarea>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Editar postagem">
    </form>
</div>

@endsection