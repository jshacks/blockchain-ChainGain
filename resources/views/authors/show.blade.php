@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$author->name}}</div>
                <div class="panel-body">
                    <h4>General Mining code</h4>
                    <div class="form-group">
                        <textarea class="form-control" style="width:100%;height: 120px;">{{$author->code}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
