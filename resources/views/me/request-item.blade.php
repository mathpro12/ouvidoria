@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Solicitação</h4></div>

<div class="col-md-8 col-md-offset-3">
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
    <br>
</div>
@endsection
