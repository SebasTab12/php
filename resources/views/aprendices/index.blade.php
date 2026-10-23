@extends('layouts.app')

@section('title', 'Aprendices')

@section('content')
<h1>Aprendices</h1>

<p><a href="{{ route('aprendices.create') }}">+ Nuevo</a></p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Ficha ID</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($aprendices as $aprendiz)
            <tr>
                <td>{{ $aprendiz->id }}</td>
                <td>{{ $aprendiz->nombre }}</td>
                <td>{{ $aprendiz->documento }}</td>
                <td>{{ $aprendiz->correo }}</td>
                <td>{{ $aprendiz->ficha_id ?? 'N/A' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay aprendices registrados.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div>
    {{ $aprendices->links() }}
</div>
@endsection