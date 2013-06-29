@extends('layout')

@section('content')
    @foreach($stats as $stat)
        <p>{{ $stat->event }}</p>
    @endforeach
@stop

