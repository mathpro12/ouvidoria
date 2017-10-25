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
    </tr>
    @foreach($requests as $request)
        <tr>
            <td>{{ $request->description }}</td>
            <td>{{ $request->status->name }}</td>
            <td>{{ $request->secretary->name }}</td>
        </tr>
    @endforeach
  </table>
</div>
@endsection
