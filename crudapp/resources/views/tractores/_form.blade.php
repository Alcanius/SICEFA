<div class="form-group">
    <label>Marca</label>
    <input type="text" name="marca" value="{{ old('marca', $tractor->marca ?? '') }}" class="form-control" required>
</div>
<div class="form-group">
    <label>Modelo</label>
    <input type="text" name="modelo" value="{{ old('modelo', $tractor->modelo ?? '') }}" class="form-control" required>
</div>
<div class="form-group">
    <label>Número Serial</label>
    <input type="text" name="numero_serial" value="{{ old('numero_serial', $tractor->numero_serial ?? '') }}" class="form-control" required>
</div>
<div class="form-group">
    <label>Tipo de Vehículo</label>
    <input type="number" name="tipo_vehiculo_id" value="{{ old('tipo_vehiculo_id', $tractor->tipo_vehiculo_id ?? '') }}" class="form-control" required>
</div>
<div class="form-group">
    <label>Estado</label>
    <select name="estado" class="form-control" required>
        <option value="Disponible" {{ (old('estado', $tractor->estado ?? '') == 'Disponible') ? 'selected' : '' }}>Disponible</option>
        <option value="Mantenimiento" {{ (old('estado', $tractor->estado ?? '') == 'Mantenimiento') ? 'selected' : '' }}>Mantenimiento</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
