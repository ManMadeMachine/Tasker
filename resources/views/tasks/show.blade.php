@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-md-offset-1">
                <a href="{{ url('/tasks') }}" class="btn btn-default" role="button">&lt;- Back</a>
            </div>
            <div class="col-md-2 pull-right">
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-default">Edit</a>
                <button class="btn btn-danger" data-toggle="modal" data-target="#confirm">Delete</button> <!-- TODO: Add confirmation to task deletion!!!! -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h4>Task:</h4>
                <p>{{ $task->name }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h4>Deadline:</h4>
                <p>{{ $task->deadline }}</p>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
            </div>
            <div class="col-md-10 col-md-offset-1">
                <p>{{ $task->description }}</p>
            </div>
        </div>
    </div>

    <div id="confirm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this task?</p>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <form role="form" action="{{ url('/tasks', $task->id) }}" method="POST">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}

                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
