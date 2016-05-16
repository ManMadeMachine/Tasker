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
                        <p>You have {{ count($tasks) }} added tasks. View them by clicking on the task.</p>
                    @endif
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    Body
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
