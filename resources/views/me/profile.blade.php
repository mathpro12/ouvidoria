@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Perfil</h4></div>

<div class="col-md-5 col-md-offset-4">
    <br>
    <div class="input-group">
        <span class="input-group-addon">Nome</span>
        <input class="form-control" value="{{ $user->name }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">CPF</span>
        <input class="form-control" value="{{ $user->cpf }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Email</span>
        <input class="form-control" value="{{ $user->email }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Logradouro</span>
        <input class="form-control" value="{{ $user->address }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Número</span>
        <input class="form-control" value="{{ $user->number }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Complemento</span>
        <input class="form-control" value="{{ $user->address_suplement }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Bairro</span>
        <input class="form-control" value="{{ $user->neighborhood }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Cidade</span>
        <input class="form-control" value="{{ $user->city }}" readonly>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Estado</span>
        <input class="form-control" value="{{ $user->state }}" readonly>
    </div>
    <br>
</div>
@endsection
