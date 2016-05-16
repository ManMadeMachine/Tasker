@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">You are logged in! What would you like to do next?</div>

                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ url('/tasks')}}" class="btn btn-primary btn-block" role="button">Manage tasks and lists</a>
                        <a href="{{ url('/profile') }}" class="btn btn-primary btn-block" role="button">View profile</a>
                        <a href="{{ url('/logout') }}" class="btn btn-primary btn-block" role="button">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
