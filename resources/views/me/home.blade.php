@extends('layouts.master')
@include('layouts.partials.me-navigation')

<a href="{{ route('logout') }}">Logout</a>

<ul>
    @foreach($requests as $request)
        <li>{{ $request->description }}</li>
    @endforeach
</ul>
