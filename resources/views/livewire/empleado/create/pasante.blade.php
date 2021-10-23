{{-- Institucion --}}
<div class="margin-bottom-3">
	<label class="form-label">Institucion</label>
	<input type="text" class="form-control" id="institucion" wire:model.defer="institucion" >
</div>

{{-- Especialidad --}}
<div class="mb-3">
	<label class="form-label">Especialidad</label>
	<input type="text" class="form-control" id="especialidad" wire:model.defer="especialidad" >
</div>

{{-- Fecha Inicio--}}
<div class="mb-3">
	<label class="form-label">Fecha Inicio</label>
	<input type="date" class="form-control" id="f_inicio" wire:model.defer="f_inicio">
</div>

{{-- Numero de Permiso  --}}
<div class="mb-3">
	<label class="form-label">Numero de Permiso</label>
	<input type="number" class="form-control" id="n_permiso" wire:model.defer="n_permiso" >
</div>

{{-- Activo --}}
<div class="mb-3">
	<div class="checkbox">
		<label class="form-label" for="activo"><input type="checkbox" value="1" wire:model.defer="activo" id="activo">Activo</label>
	</div>
</div>


