@extends('layouts.master')

@include('layouts.partials.default-navigation')

@section('content')
    <div class="col-md-5 col-md-offset-4">

        <form method="POST" action="{{ route('post.register') }}">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Nome *</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Jõao da Silva" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="cpf">CPF *</label>
                <input name="cpf" type="text" class="form-control" id="cpf" placeholder="999.999.999-99" value="{{ old('cpf') }}">
            </div>

            <div class="form-group">
                <label for="address">Logradouro *</label>
                <input name="address" type="text" class="form-control" id="address" placeholder="Rua A" value="{{ old('address') }}">
            </div>

            <div class="form-group">
                <label for="number">Número *</label>
                <input name="number" type="text" class="form-control" id="number" placeholder="500A" value="{{ old('number') }}">
            </div>

            <div class="form-group">
                <label for="address_suplement">Complemento</label>
                <input name="address_suplement" type="text" class="form-control" id="address_suplement" placeholder="Bl 1 Ap 100" value="{{ old('address_suplement') }}">
            </div>

            <div class="form-group">
                <label for="neighborhood">Bairro *</label>
                <input name="neighborhood" type="text" class="form-control" id="neighborhood" placeholder="Centro" value="{{ old('neighborhood') }}">
            </div>

            <div class="form-group">
                <label for="city">Cidade *</label>
                <input name="city" type="text" class="form-control" id="city" placeholder="Brumandinho" value="{{ old('city') }}">
            </div>

            <div class="form-group">
                <label for="state">Estado *</label>
                <input name="state" type="text" class="form-control" id="state" placeholder="Minas Gerais" value="{{ old('state') }}">
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="prefeitura@brumadinho.com" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Senha *</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Senha *</label>
                <input name="password_confirmation" type="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
