@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Solicitação</h4></div>

<div class="col-md-8 col-md-offset-3">
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
        <input class="form-control" value="{{ $request->created_at }}" readonly>
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
