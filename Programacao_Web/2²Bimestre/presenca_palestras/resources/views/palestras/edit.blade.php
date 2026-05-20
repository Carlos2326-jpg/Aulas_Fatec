@extends('layout.app')

@section('title', 'Editar Palestra')

@section('name')
    <h2>Editar Palestra</h2>

    <form action="{{ route('palestra.update') }}" method="POST">
        @csrf
        @method('PUT')
        @include('palestra._form', ['palestra' => $palestra])
        <button type="submit">Atualizar</button>
        <a class="button" href="{{ route('palestra.index') }}">Cancelar</a>
    </form>
@endsection
