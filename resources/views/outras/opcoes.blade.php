@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('conteudo')
{{  request()->routeIs()  }}
    <div class="options">
        <ul>
            <li><a class="warning {{ (request()->path() == 'opcoes/1') ? 'selected' : '' }}" href="{{ route('opcoes', 1) }}">warning</a></li>
            <li><a class="info {{ (request()->path() == 'opcoes/2') ? 'selected' : '' }}" href="{{ route('opcoes', 2) }}">info</a></li>
            <li><a class="success {{ (request()->path() == 'opcoes/3') ? 'selected' : '' }}" href="{{ route('opcoes', 3) }}">success</a></li>
            <li><a class="error {{ (request()->path() == 'opcoes/4') ? 'selected' : '' }}" href="{{ route('opcoes', 4) }}">error</a></li>
        </ul>
    </div>
    @if (isset($opcao))
        @switch($opcao)
            @case(1)
                <x-alerta titulo="Erro Fatal" tipo="warning">
                    <p><strong>Warning</strong></p>
                    <p>Ocorreu um erro inesperado</p>
                </x-alert>
                @break
            @case(2)
                <x-alerta titulo="Erro Fatal" tipo="info">
                    <p><strong>info</strong></p>
                    <p>Ocorreu um erro inesperado</p>
                </x-alert>
                @break
            @case(3)
                <x-alerta titulo="Erro Fatal" tipo="success">
                    <p><strong>success</strong></p>
                    <p>Ocorreu um erro inesperado</p>
                </x-alert>
                @break
            @case(4)
                <x-alerta titulo="Erro Fatal" tipo="error">
                    <p><strong>error</strong></p>
                    <p>Ocorreu um erro inesperado</p>
                </x-alert>
                @break
        @endswitch
    @endif
@endsection
