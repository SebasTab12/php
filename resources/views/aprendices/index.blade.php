@extends('layouts.app')

@section('content')
<section class="learner-page">
    <header class="learner-header">
        <div>
            <p class="learner-eyebrow">CENTRO DE FORMACIÓN <span>/</span> DIRECTORIO</p>
            <h1>Aprendices</h1>
            <p class="learner-subtitle">Consulta y administra la información de tus aprendices.</p>
        </div>
        <a class="learner-create" href="{{ route('aprendices.create') }}"><span>+</span> Nuevo aprendiz</a>
    </header>

    <form class="learner-search" action="{{ route('aprendices.index') }}" method="GET">
        <label class="sr-only" for="learner-query">Buscar aprendices</label>
        <input id="learner-query" type="text" name="q" value="{{ $q ?? '' }}" placeholder="Buscar por nombre o documento...">
        <button type="submit" class="learner-search-button"><span aria-hidden="true">⌕</span> Buscar</button>
        @if(!empty($q))
            <a class="learner-clear" href="{{ route('aprendices.index') }}">Limpiar</a>
        @endif
    </form>

    <div class="learner-table-frame">
        <table class="learner-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Aprendiz</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Ficha ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($aprendices as $aprendiz)
                    <tr>
                        <td class="learner-id">{{ $aprendiz->id }}</td>
                        <td class="learner-person"><span class="learner-avatar" aria-hidden="true">{{ strtoupper(substr($aprendiz->nombre, 0, 1)) }}</span><span>{{ $aprendiz->nombre }}</span></td>
                        <td>{{ $aprendiz->documento }}</td>
                        <td class="learner-email">{{ $aprendiz->correo }}</td>
                        <td><span class="learner-cohort">{{ $aprendiz->ficha_id ?? 'N/A' }}</span></td>
                        <td class="learner-actions-cell">
                            <div class="learner-actions">
                                <a class="learner-edit" href="{{ route('aprendices.edit', $aprendiz) }}">Editar</a>
                                <form action="{{ route('aprendices.destroy', $aprendiz) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este aprendiz?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="learner-delete">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="learner-empty" colspan="6">
                            <span class="learner-empty-mark" aria-hidden="true">—</span>
                            <strong>No hay aprendices para mostrar</strong>
                            <span>Prueba otra búsqueda o registra un nuevo aprendiz.</span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="learner-pagination">{{ $aprendices->links() }}</div>
</section>
@endsection