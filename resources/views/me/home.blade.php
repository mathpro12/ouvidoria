@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Minhas Solicitações</h4></div>
<br>
<div class="col-md-10 col-md-offset-2">
  @if (count($requests == 0))
    <h1>Você não possui solicitações ainda!</h1>
  @endif
  <table class="table">
    <tr>
        <th>Assunto</th>
        <th>Estado da solicitação</th>
        <th>Secretaria</th>
        <th>Data de Solicitação</th>
    </tr>
    @foreach($requests as $request)
        <tr>
            <td><a href="{{ route('get.me.request', $request->id) }}">{{ $request->subject }}</a></td>
            <td>{{ $request->status->name }}</td>
            <td>{{ $request->secretary->name }}</td>
            <td>{{ parse_timestamp($request->created_at->timestamp) }}</td>
        </tr>
    @endforeach
  </table>
</div>
@endsection
