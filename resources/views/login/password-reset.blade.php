@extends('layouts.master')
@include('layouts.partials.default-navigation')

@section('content')
<div class="col-md-5 col-md-offset-4">

    <form method="POST" action="{{ route('post.password-reset') }}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div align="right">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
@endsection
