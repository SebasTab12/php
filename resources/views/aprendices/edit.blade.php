@extends('layouts.app')

@section('content')
<section class="learner-editor">
    <header class="learner-editor-header">
        <a class="learner-back" href="{{ route('aprendices.index') }}">← Volver al directorio</a>
        <p class="learner-eyebrow">DIRECTORIO <span>/</span> EDITAR REGISTRO</p>
        <h1>Editar aprendiz</h1>
        <p class="learner-subtitle">Actualiza la información de este aprendiz.</p>
    </header>

    <form class="learner-editor-form" action="{{ route('aprendices.update', $aprendiz) }}" method="POST">
        @csrf
        @method('PUT')

        @include('aprendices._form')

        <div class="learner-form-actions">
            <a href="{{ route('aprendices.index') }}">Cancelar</a>
            <button type="submit">Actualizar aprendiz</button>
        </div>
    </form>
</section>
@endsection