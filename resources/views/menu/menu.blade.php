@extends('layouts.master')

<div class="container" align="center">
    <a href="{{ route('get.logged-in-requests') }}" class="btn btn-primary">Solicitação</a>
    <a href="{{ route('get.anonymous-requests') }}" class="btn btn-primary">Solicitação Anônima</a>
</div>
