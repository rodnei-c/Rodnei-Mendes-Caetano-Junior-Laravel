@extends('layouts.main')

@section('title','Dashboard')

@section('content')

<div class="com-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas postagens</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-posts-container">
    @if(count($posts) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td scropt="row">{{$loop->index+1}}</td>
            <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
            <td>
            <a href="/posts/edit/{{$post->id}}" class="btn btn-info edit-btn">Editar</a>
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
            </form>
            </td>
        
        </tr>
        @endforeach
    </tbody>
    </table>
    @else
    <p>Você não fez nenhuma postagem, <a href="/posts/create">criar postagem</a></p>
    @endif
</div>

@endsection
