@extends('layouts.app')

@section('titulo', 'Catálogo')

@section('contenido')
    <h1>Catálogo de Insumos</h1>

    <ul>
        @forelse($insumos as $insumo)
            <li>
                {{ $loop->iteration }} - {{ $insumo['nombre'] }}: ${{ $insumo['precio'] }}
            </li>
        @empty
            <p>No hay insumos cargados en el sistema</p>
        @endforelse
    </ul>
@endsection