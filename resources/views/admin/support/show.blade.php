@extends('layouts/master')
@section('title') TICKET #{{$ticket->id}} | {{$ticket->subject}} @endsection
@section('content')
    <h1>Ticket #{{$ticket->id}}</h1>

    <table>
        <tr>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Status</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
        </tr>

        <tr>
            <td>{{$ticket->subject}}</td>
            <td>{{$ticket->body}}</td>
            <td>{{$ticket->status}}</td>
            <td>{{$ticket->created_at}}</td>
            <td>{{$ticket->updated_at}}</td>
        </tr>
    </table>

    <br>

    <a href="{{route('support.index')}}">Ver todos tickets</a>
    <span> | </span>
    <a href="{{route('support.open')}}">Abrir novo ticket</a>

@endsection