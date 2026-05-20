@extends('loyout.app')

@section('title', 'Detalhes da Palestra')

@section('content')
    <h2>{{ $palestra->titulo }}</h2>

    <p>
        <strong>Palestrante</strong>
        {{ $palestra->palestrante }}
    </p>

    <p>
        <strong>Data</strong>
        {{ optional($palestra->data)->format('d/m/Y H:i') }}
    </p>

    <p>
        <strong>Local</strong>
        {{ $palestra->local }}
    </p>

    <p>
        <strong>Descrição</strong>
        {{ $palestra->descricao }}
    </p>

    <a class="button" href="{{ $palestra . index }}"></a>
@endsection
