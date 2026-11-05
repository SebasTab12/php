@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 0 auto;">
    <h2>Crear Nuevo Aprendiz</h2>

    <form action="{{ route('aprendices.store') }}" method="POST">
        @csrf
        @include('aprendices._form')

        <button type="submit" style="padding: 8px 16px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Guardar Aprendiz</button>
        <a href="{{ route('aprendices.index') }}" style="margin-left: 10px; color: #6c757d; text-decoration: none;">Cancelar</a>
    </form>
</div>
@endsection