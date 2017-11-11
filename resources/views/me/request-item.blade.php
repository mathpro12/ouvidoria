@extends('layouts.master')
@include('layouts.partials.me-navigation')

@section('content')
<div class="container" align="center"><h4>Solicitação</h4></div>

<div class="col-md-10 col-md-offset-2">
    <label>Secretaria</label>
    <div class="col-lg-10">
        <input value="{{ $request->secretary->name }}"></input>
    </div>

    <label>Assunto</label>
    <div class="col-lg-10">
        <input value="{{ $request->subject }}"></input>
    </div>

    <label>Data de Solicitação</label>
    <div class="col-lg-10">
        <input value="{{ $request->created_at }}"></input>
    </div>

    <label>Descrição</label>
    <div class="col-lg-10">
        <textarea value="{{ $request->secretary }}"></textarea>
    </div>
</div>
@endsection
