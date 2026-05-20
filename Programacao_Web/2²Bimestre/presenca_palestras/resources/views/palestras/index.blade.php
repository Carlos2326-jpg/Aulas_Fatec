@extends('latout.app')

@section('content')
    <h2>Lista de Palestrras</h2>

    @if ($paslestras->isEmpty())
        <p>Nenhuma palestra cadastrada</p>
    @else
        <table>
            <thead>
                    <tr>
                        <th>Título</th>
                        <th>Palestras</th>
                        <th>Data</th>
                        <th>Local</th>
                        <th>Ações</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($palestras as $p)
                    <tr>
                        <td>{{ $p->titulo }}</td>
                        <td>{{ $p->palestrante }}</td>
                        <td>{{ ($p->data)->formaat('d/m/Y' H:i) }}</td>
                        <td>{{ $p->local }}</td>
                        <td>
                            <a class="button" href="{{ route('palestras.edit'), $p }}">Editar</a>
                            <form action="{{ route('palestras.destroy'), $p }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Excluir está palestra')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection