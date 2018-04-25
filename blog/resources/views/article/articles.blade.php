@extends('layout')

@section('title', 'Mes Articles')


@section('content')
<div class="container-fluid">
   <h2 class="titrearticle">Mes articles</h2>
       @foreach($articles as $article)
                 <!-- Blog Post cf index.html-->
                 <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$article}}</h2>
              <p class="card-text">{{$article}}</p>
              <!-- <a href="#" class="btn btn-primary">Read More &rarr;</a> -->
            </div>
            <div class="card-footer text-muted">
              <!-- Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a> -->
            </div>
          </div>
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