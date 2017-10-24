@extends('layouts.master')
@include('layouts.partials.me-navigation')

<div class="panel panel-default">
  <div class="panel-heading"><h4>Requisições</h4></div>

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
