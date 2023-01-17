@extends('layouts.basic')

@section('content')

<div class="container-sm">
<h2>POSTS</h2><h7>@lang('Crear publicación')</h7>
<br><br>
<h4>@lang('Crear una publicación')</h3>

<form action="submit" action="POST">
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>@lang('Acceso')</option>
  <option value="1">@lang('Privado')</option>
  <option value="2">@lang('Público')</option>
</select>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">@lang('Título de la publicación')</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa aquí el título de la publicación">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">@lang('Extracto publicación')</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingresa un extracto de la publicación" rows="2"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">@lang('Contenido publicación')</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingresa el contenido completo de la publicación" rows="3"></textarea>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">@lang('Caducable')</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">@lang('Comentable')</label>
</div>
</div>
</form>
@endsection