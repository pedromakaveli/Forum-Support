@extends('layouts/master')
@section('title') Todos os tickets @endsection
@section('content')
    <h2>Tickets abertos</h2>
    <a href="{{route('support.open')}}">Abrir novo ticket</a>
    <br><br>

    <table>
        <tr>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Status</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Link</th>
        </tr>

        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->subject}}</td>
                <td>{{$ticket->body}}</td>
                <td>{{$ticket->status}}</td>
                <td>{{$ticket->created_at}}</td>
                <td>{{$ticket->updated_at}}</td>
                <td><a target="_blank" href="{{route('support.show', $ticket->id)}}">Visualizar</a></td>
            </tr>
        @endforeach

    </table>
@endsection
