@extends('layouts.master')

@if (isset($user))
    @include('layouts.partials.me-navigation')
@endif

@if (!isset($user))
    @include('layouts.partials.default-navigation')
@endif

@section('content')
<div class="container" align="center"><h4>Solicitação</h4></div>

<div class="col-md-6">
    <br>
    <div class="input-group">
        <span class="input-group-addon">Secretaria</span>
        <input class="form-control" value="{{ $request->secretary->name }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Assunto</span>
        <input class="form-control" value="{{ $request->subject }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Data de Solicitação</span>
        <input class="form-control" value="{{ parse_timestamp($request->created_at->timestamp) }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Data da Última Atualização</span>
        <input class="form-control" value="{{ parse_timestamp($request->updated_at->timestamp) }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Estado da Solicitação</span>
        <input class="form-control" value="{{ $request->status->name }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Descrição</span>
        <textarea class="form-control" rows="8" readonly>{{ $request->description }}</textarea>
    </div>
</div>

<div class="col-md-6">
    <br>
    <div class="input-group">
        <span class="input-group-addon">Histórico</span>
    </div>
    <table class="table" style="width:100%">
        <tr>
            <th>Estado da Manifestação</th>
            <th>Data</th>
            <th>Resposta</th>
        </tr>
        @foreach($history as $stage)
            <tr>
                <td width="20%">{{ $stage->status->name }}</td>
                <td width="20%">{{ parse_timestamp($stage->created_at->timestamp) }}</td>
                <td width="60%">{{ $stage->answer }}</td>
            </tr>
        @endforeach
  </table>
</div>
@endsection
