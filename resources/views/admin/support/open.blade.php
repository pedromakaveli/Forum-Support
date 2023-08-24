@extends('layouts/master')
@section('title') Abrir novo ticket @endsection
@section('content')
    <h2>Novo ticket?</h2>

    <form action="{{route('support.store')}}" method="POST">
        @csrf()

        <input type="text" name="subject" placeholder="Assunto">
        <br><br>
        <textarea name="body" id="" cols="30" rows="5" placeholder="Digite sua mensagem"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a href="{{route('support.index')}}">Voltar</a>
    
@endsection
