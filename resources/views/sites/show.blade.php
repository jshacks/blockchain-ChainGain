@extends('layouts.app')

@section('content')

    <h3>{{$site->name}}</h3>

    <ul>
      @foreach($site->authors as $author)
        {{$author->name}}
      @endforeach
    </ul>

@endsection