@extends('layouts.app')

@section('content')
<section class="learner-editor">
    <header class="learner-editor-header">
        <a class="learner-back" href="{{ route('aprendices.index') }}">← Volver al directorio</a>
        <p class="learner-eyebrow">DIRECTORIO <span>/</span> NUEVO REGISTRO</p>
        <h1>Crear aprendiz</h1>
        <p class="learner-subtitle">Completa los datos para agregar una persona al directorio.</p>
    </header>

    <form class="learner-editor-form" action="{{ route('aprendices.store') }}" method="POST">
        @csrf
        @include('aprendices._form')

        <div class="learner-form-actions">
            <a href="{{ route('aprendices.index') }}">Cancelar</a>
            <button type="submit">Guardar aprendiz</button>
        </div>
    </form>
</section>
@endsection