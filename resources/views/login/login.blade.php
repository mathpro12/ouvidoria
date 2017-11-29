@extends('layouts.master')
@include('layouts.partials.default-navigation')

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-4">

        <form method="POST" action="{{ route('post.login') }}">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="prefeitura@brumadinho.com" required>
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input name="password" type="password" class="form-control" id="password" required>
            </div>

            <div class="col-md-6">
                <a href="{{ route('get.password-reset') }}">Esqueci minha senha</a>
            </div>

            <div class="col-md-6" align="right">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
