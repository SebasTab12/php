@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h2>Listado de Aprendices</h2>
    <a href="{{ route('aprendices.create') }}" style="padding: 6px 12px; background: #007bff; color: #fff; text-decoration: none; border-radius: 4px;">+ Nuevo Aprendiz</a>
</div>

<!-- Formulario de búsqueda -->
<form action="{{ route('aprendices.index') }}" method="GET" style="margin-bottom: 20px; display: flex; gap: 8px;">
    <input type="text" name="q" value="{{ $q ?? '' }}" placeholder="Buscar por nombre o documento..." style="padding: 6px; flex: 1; border: 1px solid #ddd; border-radius: 4px;">
    <button type="submit" style="padding: 6px 12px; background: #6c757d; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Buscar</button>
    @if(!empty($q))
        <a href="{{ route('aprendices.index') }}" style="padding: 6px 12px; background: #dc3545; color: #fff; text-decoration: none; border-radius: 4px;">Limpiar</a>
    @endif
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Ficha ID</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($aprendices as $aprendiz)
            <tr>
                <td>{{ $aprendiz->id }}</td>
                <td>{{ $aprendiz->nombre }}</td>
                <td>{{ $aprendiz->documento }}</td>
                <td>{{ $aprendiz->correo }}</td>
                <td>{{ $aprendiz->ficha_id ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('aprendices.edit', $aprendiz) }}" style="color: #b45309; text-decoration: none; margin-right: 8px; font-weight: bold;">Editar</a>
                    
                    <form action="{{ route('aprendices.destroy', $aprendiz) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este aprendiz?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none; border: none; color: #dc3545; cursor: pointer; padding: 0; font-weight: bold;">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" style="text-align: center;">No hay aprendices registrados.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top: 20px;">
    {{ $aprendices->links() }}
</div>
@endsection