@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
    <div class="col-md-6">

        <form method="POST" action="{{ route('post.logged-in-requests') }}">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="secretary_id" class="col-lg-2 control-label">Secretaria</label>
                <div class="col-lg-10">
                    {!! Form::select(
                        'secretary_id',
                        $secretaries,
                        old('secretary_id'),
                        ['class' => 'form-control']
                    ) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="type_id" class="col-lg-2 control-label">Tipo</label>
                <div class="col-lg-10">
                    {!! Form::select(
                        'type_id',
                        $types,
                        old('type_id'),
                        ['class' => 'form-control']
                    ) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <input name="description" type="text-area" class="form-control" id="description">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
