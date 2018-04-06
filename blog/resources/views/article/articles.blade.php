@extends('layout')

@section('title', 'Mes Articles')


@section('content')
<div class="container-fluid">
   <h2 class="titrearticle">Mes articles</h2>
       @foreach($articles as $article)
               <p>{{ $article}}</p>
       @endforeach
</div>

@endsection




<!-- @extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
@foreach($articles as $article)
        <p>{{ $article}}</p>
@endforeach

@endsection -->