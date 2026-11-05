@if ($errors->any())
    <div class="danger">
        <strong>Errores:</strong>
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div style="margin-bottom: 12px;">
    <label style="display:block;">Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre', $aprendiz->nombre ?? '') }}" style="width:100%; padding:6px; border: 1px solid #020202; border-radius: 4px;">
</div>

<div style="margin-bottom: 12px;">
    <label style="display:block;">Documento:</label>
    <input type="text" name="documento" value="{{ old('documento', $aprendiz->documento ?? '') }}" style="width:100%; padding:6px; border: 1px solid #020202; border-radius: 4px;">
</div>

<div style="margin-bottom: 12px;">
    <label style="display:block;">Correo:</label>
    <input type="email" name="correo" value="{{ old('correo', $aprendiz->correo ?? '') }}" style="width:100%; padding:6px; border: 1px solid #020202; border-radius: 4px;">
</div>

<div style="margin-bottom: 12px;">
    <label style="display:block;">Ficha ID (Opcional):</label>
    <input type="text" name="ficha_id" value="{{ old('ficha_id', $aprendiz->ficha_id ?? '') }}" style="width:100%; padding:6px; border: 1px solid #020202; border-radius: 4px;">
</div>