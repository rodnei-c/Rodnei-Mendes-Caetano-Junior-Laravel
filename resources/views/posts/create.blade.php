@extends('layouts.main')

@section('title','Criar Postagem')

@section('content')

<div id="post-create-container" class="col-md-6 offset-md-3">
    <h1>Criar postagem</h1>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Título da postagem">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrição da postagem"></textarea>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Criar postagem">
    </form>
</div>

@endsection