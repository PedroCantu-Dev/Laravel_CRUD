
<div class="form-group">
<label class="control-label" for="Nombre" >{{'Nombre'}}</label>
<input class="form-control {{$errors->has('Nombre')?'is-invalid':old('Nombre')}}" type="text" name="Nombre" id="Nombre" value="{{isset( $empleado->Nombre)?$empleado->Nombre:''}}">

{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>' ) !!}
</div>

<div class="form-group">
<label class="control-label" for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
<input class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset( $empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
</div>

<div class="form-group">
<label class="control-label" for="ApellidoMaterno">{{'Apellido Materno'}}</label>
<input class="form-control" type="text" name="ApellidoMAterno" id="ApellidoMaterno" value="{{isset( $empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
</div>

<div class="form-group">
<label class="control-label" for="Correo">{{'Correo'}}</label>
<input class="form-control" type="email" name="Correo" id="Correo" value="{{isset( $empleado->Correo)?$empleado->Correo:''}}">
</div>

<div class="form-group">
<label class="control-label" for="Foto">{{'Foto'}}</label>
@if(isset($empleado->Foto))
<br>
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
<!-- <label for="Foto">{{'Foto'}}</label> -->
<br>
@endif
<input class="form-control" type="file" name="Foto" id="Foto" value="">
</div>


<input class="btn btn-success" type="submit" value="{{ $Modo=='crear' ? 'Agregar empleado' : 'Modificar empleado' }}
">

<a class="btn btn-primary" href="{{ url('empleados')}}">Regresar al indice</a>