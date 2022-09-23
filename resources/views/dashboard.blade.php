@extends('layouts.main')

@section('title','Dashboard')

@section('content')

<div class="com-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas postagens</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count(posts) > 0)
    @else
    <p>Você não fez nenhuma postagem, <a href="/events/create">criar postagem</a>
    @endif
</div>

@endsection
