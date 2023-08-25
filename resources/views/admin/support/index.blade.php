@extends('layouts/master')
@section('title') Todos os tickets @endsection
@section('content')
    <h2>Tickets abertos</h2>
    
    <div class="support-index-btn-open">
        <a class="btn btn-open" href="{{route('support.open')}}">Abrir novo ticket</a>
    </div>


    <table>
        <tr>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Status</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
        </tr>

        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->subject}}</td>
                <td>{{$ticket->body}}</td>
                <td>{{$ticket->status}}</td>
                <td>{{$ticket->created_at}}</td>
                <td>{{$ticket->updated_at}}</td>
                <td><a class="btn btn-view" target="_blank" href="{{route('support.show', $ticket->id)}}">Visualizar</a></td>
                <td><a class="btn btn-delete" href="{{route('support.delete', $ticket->id)}}">Deletar</a></td>
            </tr>
        @endforeach

    </table>
@endsection
