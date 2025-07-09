<div class="form-group">
    <label>Descripción</label>
    <input type="text" name="descripcion" value="{{ old('descripcion', $tipoVehiculo->descripcion ?? '') }}" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
