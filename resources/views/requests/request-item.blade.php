@extends('layouts.master')

@if (isset($user))
    @include('layouts.partials.me-navigation')
@endif

@if (!isset($user))
    @include('layouts.partials.default-navigation')
@endif

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
    <div class="input-group">
        <span class="input-group-addon">Histórico</span>
    </div>
    <br>

    @foreach($history as $stage)
        <div class="input-group">
            <span class="input-group-addon">{{ $stage->status->name }}</span>
            <input class="form-control" value="{{ $stage->answer }}" readonly>
        </div>
    <br>
    @endforeach
</div>
@endsection
