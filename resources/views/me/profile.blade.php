@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Perfil</h4></div>

<form method="POST" action="{{ route('put.me.profile') }}">
    {!! csrf_field() !!}
    <div class="col-md-6 col-md-offset-3">
        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Nome *</span>
                <input class="form-control" value="{{ $user->name }}" name="name">
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">CPF *</span>
                <input class="form-control" value="{{ $user->cpf }}" name="cpf" readonly>
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Email *</span>
                <input class="form-control" value="{{ $user->email }}" name="email" readonly>
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Logradouro *</span>
                <input class="form-control" value="{{ $user->address }}" name="address">
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Número *</span>
                <input class="form-control" value="{{ $user->number }}" name="number">
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Complemento</span>
                <input class="form-control" value="{{ $user->address_suplement }}" name="address_suplement">
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Bairro *</span>
                <input class="form-control" value="{{ $user->neighborhood }}" name="neighborhood">
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Cidade *</span>
                <input class="form-control" value="{{ $user->city }}" name="city">
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Estado *</span>
                <input class="form-control" value="{{ $user->state }}" name="state">
            </div>
        </div>

        <br>

        <div align="right">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
@endsection
