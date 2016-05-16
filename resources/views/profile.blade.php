@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h3>Profiili</h3>
    </div>

    <h4>TODO:</h4>

    <div class="list-group">
        <a href="#" class="list-group-item">Aloitusnäkymä</a>
        <a href="{{ url('/profile/edit') }}" class="list-group-item">Omat tiedot ja niiden muokkaus</a>
        <a href="#" class="list-group-item">Avatar (ehkä)</a>
        <a href="#" class="list-group-item">???</a>
    </div>
</div>
@endsection
