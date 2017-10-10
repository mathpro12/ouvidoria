@extends('layouts.master')

@section('content')
<div class="col-md-6">

    <form method="POST" action="{{ route('post.login') }}">
        {!! csrf_field() !!}

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
