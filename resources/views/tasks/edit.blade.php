@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form role="form" action="{{ url('/tasks', $task->id) }}" method="POST">
                {!! csrf_field() !!}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}"/>
                </div>
                <div class="form-group">
                    <label for="deadline">Deadline:</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" value="{{ $task->deadline }}"/>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" multiline>{{ $task->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/tasks') }}" class="btn btn-danger" role="button">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
