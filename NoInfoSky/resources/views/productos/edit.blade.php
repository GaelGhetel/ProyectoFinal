@extends('layouts.app')

@section('container')

    <h1 class = "text-center">Editar Productos</h1>

    <div class = "container">

        <form action = "{{route('ProductosUpdate',$producto->id)}}"  method="post">
            @csrf @method('PATCH')
            <div class="form-group">
                <label for = "nombre" class = "form-label">Nombre</label>
                <input type = "text" name="nombre" class="form-control" value ="{{old('nombre', $producto->nombre)}}">
                
                @error('nombre')
                    <div style ="color: red;">{{$message}}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label for = "nombre" class = "form-label">Descripcion</label>
                <input type = "text" name="descripcion" class="form-control" value="{{old('descripcion', $producto->descripcion)}}">
                @error('descripcion')
                    <div style ="color: red;">{{$message}}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label for = "nombre" class = "form-label">Precio</label>
                <input type = "text" name="precio" class="form-control" value="{{old('precio', $producto->precio)}}">
                
                @error('precio')
                    <div style ="color: red;">{{$message}}</div>
                @enderror
            </div> 

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('ProductosIndex')}}" class="btn btn-danger">Cancelar</a>
            </div> 
        </form>

    </div>

@endsection