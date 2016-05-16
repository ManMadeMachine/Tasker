@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your current tasks</div>
                <div class="panel-body">
                    @if (count($tasks) == 0)
                        <p>You have no added tasks. Add tasks by clicking the "Add task" button below</p>
                    @else
                        <div class="list-group">
                            @foreach ($tasks as $task)
                                <a href="{{ url('/tasks', $task->id) }}" class="list-group-item">{{ $task->name }}</a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <a href="{{ url('/tasks/create') }}" class="btn btn-primary" role="button">Add task</a>
        </div>
    </div>
</div>
@endsection
