@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Minhas Manifestações</h4></div>
<br>
<div class="container" align="center">
    <div class="col-md-12">
      <table class="table">
        <tr>
            <th>Assunto</th>
            <th>Estado da Manifestação</th>
            <th>Secretaria</th>
            <th>Data</th>
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
</div>
@endsection
