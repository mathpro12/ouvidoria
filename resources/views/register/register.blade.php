@extends('layouts.master')

@section('content')
    <div class="col-md-6">

        <form method="POST" action="{{ route('post.register') }}">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Jõao da Silva">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input name="cpf" type="text" class="form-control" id="cpf" placeholder="999.999.999-99">
            </div>

            <div class="form-group">
                <label for="address">Endereço</label>
                <input name="address" type="text" class="form-control" id="address" placeholder="Rua A">
            </div>

            <div class="form-group">
                <label for="number">Número</label>
                <input name="number" type="text" class="form-control" id="number" placeholder="500A">
            </div>

            <div class="form-group">
                <label for="address_suplement">Complemento</label>
                <input name="address_suplement" type="text" class="form-control" id="address_suplement" placeholder="Bl 1 Ap 100">
            </div>

            <div class="form-group">
                <label for="neighborhood">Bairro</label>
                <input name="neighborhood" type="text" class="form-control" id="neighborhood" placeholder="Centro">
            </div>

            <div class="form-group">
                <label for="city">Cidade</label>
                <input name="city" type="text" class="form-control" id="city" placeholder="Brumandinho">
            </div>

            <div class="form-group">
                <label for="state">Estado</label>
                <input name="state" type="text" class="form-control" id="state" placeholder="Minas Gerais">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="prefeitura@brumadinho.com">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
