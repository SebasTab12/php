@if ($errors->any())
    <div class="danger learner-errors">
        <strong>Errores:</strong>
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="learner-form-grid">
    <div class="learner-form-field">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" value="{{ old('nombre', $aprendiz->nombre ?? '') }}">
    </div>

    <div class="learner-form-field">
        <label for="documento">Documento</label>
        <input id="documento" type="text" name="documento" value="{{ old('documento', $aprendiz->documento ?? '') }}">
    </div>

    <div class="learner-form-field">
        <label for="correo">Correo</label>
        <input id="correo" type="email" name="correo" value="{{ old('correo', $aprendiz->correo ?? '') }}">
    </div>

    <div class="learner-form-field">
        <label for="ficha_id">Ficha ID <span>(opcional)</span></label>
        <input id="ficha_id" type="text" name="ficha_id" value="{{ old('ficha_id', $aprendiz->ficha_id ?? '') }}">
    </div>
</div>