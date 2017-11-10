@extends('layouts.master')
@include('layouts.partials.default-navigation')

@section('content')
    <div class="col-md-7 col-md-offset-3">

        <form method="POST" action="{{ route('post.anonymous-requests') }}">
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
                <label for="description">Assunto</label>
                <input type="text" name="subject" class="form-control" maxlength="25"></input>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" class="form-control" maxlength="500" cols="5" rows="6"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
