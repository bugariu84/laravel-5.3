@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills">
                            <li role="presentation"><a href="{{ url('company/') }}">Companies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection