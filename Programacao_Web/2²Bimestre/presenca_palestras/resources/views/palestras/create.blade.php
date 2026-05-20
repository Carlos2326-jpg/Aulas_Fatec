@extends('layout.app');

@section('tile', 'Nova Palestra')

@section('content')
    <h2>Cadastrar Palestra</h2>

    <form action="{{ route('palestra.store') }}" method="POST">
        @include('palestra._form')
        <button type="submit">Salvar</button>
        <a class="buttoon" href="{{ route('palestra.index') }}">Carcelar</a>
    </form>
@endsection
