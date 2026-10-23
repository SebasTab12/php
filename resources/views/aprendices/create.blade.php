@extends('layouts.app')

@section('title', 'Nuevo Aprendiz')

@section('content')
<h1>Nuevo Aprendiz</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('aprendices.store') }}" method="POST">
    @csrf

    <label>Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}" required></label><br><br>
    <label>Documento: <input type="text" name="documento" value="{{ old('documento') }}" required></label><br><br>
    <label>Correo: <input type="email" name="correo" value="{{ old('correo') }}" required></label><br><br>
    <label>Ficha ID: <input type="number" name="ficha_id" value="{{ old('ficha_id') }}"></label><br><br>

    <button type="submit">Guardar</button>
    <a href="{{ route('aprendices.index') }}">Cancelar</a>
</form>
@endsection