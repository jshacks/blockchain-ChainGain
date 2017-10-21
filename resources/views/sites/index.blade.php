@extends('layouts.app')

@section('content')

    <ul>
    @foreach($sites as $site)
    <li>
        {{$site->name}}
    </li>
    @endforeach
    </ul>

    <form action="/sites" method="post">
    {!!csrf_field()!!}
    <button type="submit">ewqeqw</button>
    </form>

    <new-site></new-site>

@endsection