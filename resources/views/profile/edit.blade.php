@extends('layouts.app')

@section('content')
    <p>Tähän tulee profiilin tietojen editointi</p>

    <h3>Käyttäjä: {{ $user->name }}</h3>
@endsection
