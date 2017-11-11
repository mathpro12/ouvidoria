@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Requisições</h4></div>
<div class="col-md-10 col-md-offset-2">
  <table class="table">
    <tr>
        <th>Descrição</th>
        <th>Estado da solicitação</th>
        <th>Secretaria</th>
        <th>Data de Solicitação</th>
    </tr>
    @foreach($requests as $request)
        <tr>
            <td><a href="{{ route('get.me.request', $request->id) }}">{{ $request->subject }}</a></td>
            <td>{{ $request->status->name }}</td>
            <td>{{ $request->secretary->name }}</td>
            <td>{{ $request->created_at }}</td>
        </tr>
    @endforeach
  </table>
</div>
@endsection
