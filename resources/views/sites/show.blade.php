@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Site {{$site->name}}</div>
                <div class="panel-body">
                    <authors :id="{{ $site->id }}" :authors="{{ $site->authors }}"></authors>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
