@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sites</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <sites-add></sites-add>
                    <br><br>
                    <sites-list :sites="{{$sites}}"></sites-list>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
