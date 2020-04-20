<div>Título: {{$libro->titulo}}</div>
<div>Isbn: {{$libro->isbn}}</div>
<div>Autor: {{$libro->autor}}</div>
<div>Editorial:  {{$libro->editorial}}</div>
<div>Cantidad: {{$libro->cantidad}}</div>
<div><img src="{{Storage::url("imagenes/caratulas/$libro->foto")}}" alt="Caratula del libro" width="100%"></div>
{{-- <div><img src="{{$libro->foto")}}" alt="Caratula del libro"></div> --}}
