@extends('layouts.master')
@include('layouts.partials.default-navigation')

@section('content')
<div class="col-md-4 col-md-offset-4">

    <form method="POST" action="{{ route('post.follow-request') }}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="hash">Protocolo</label>
            <input name="hash" type="text" class="form-control" id="hash" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
