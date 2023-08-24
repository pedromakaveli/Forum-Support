@extends('layouts/master')
@section('title') Erro inesperado @endsection

@section('content')
    <h2>{{$error}}</h2>
    <br>
    
    <a href="{{route('support.index')}}">Ver todos tickets</a>
@endsection