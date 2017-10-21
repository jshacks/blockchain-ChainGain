@extends('layouts.app')

@section('content')

    <ul>
    @foreach($sites as $site)
    <li>
        {{$site->name}}
    </li>
    @endforeach
    </ul>

@endsection