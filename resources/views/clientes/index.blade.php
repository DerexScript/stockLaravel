@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('conteudo')
    <h1>{{ $titulo }}</h1>
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>

    @if (count($clientes) > 0)
        <ul>
            @foreach ($clientes as $c)
                <li>
                    {{ $c['id'] }} | {{ $c['nome'] }} |
                    <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a> |
                    <a href="{{ route('clientes.show', $c['id']) }}">View</a> |
                    <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Deletar">
                    </form>
                </li>
            @endforeach
        </ul>
        <hr>
        @for ($i = 0; $i < 10; $i++)
            {{ $i }},
        @endfor
        <br>

        @for ($i = 0; $i < count($clientes); $i++)
            {{ $clientes[$i]['nome'] }},
        @endfor
        <br>

        @foreach ($clientes as $c)
            <p>
                {{ $c['nome'] }} |
                @if ($loop->first)
                    (Primeiro) |
                @endif
                @if ($loop->last)
                    (Ultimo) |
                @endif
                ({{ $loop->index }}) - {{ $loop->iteration }} / {{ $loop->count }}
            </p>
        @endforeach


    @else
        <h4>Não Existem Clientes Cadastrados.</h4>
    @endif

    @empty($clientes)
        <h4>Não Existem Clientes Cadastrados.</h4>
    @endempty
@endsection
