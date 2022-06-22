@extends('adminlte::page')

@section('title', 'Actividades')

@section('content_header')
    <h1>Crear Actividad</h1>
@stop

@section('content')

    {{-- Minimal --}}
    <x-adminlte-button class="my-1" label="Regresar" theme="primary" 
        onClick="window.location.href='{{ route('actividades') }}'"/>

    {{-- Card --}}
    <x-adminlte-card theme="danger" theme-mode="outline">
        
        <form class="container" id="formulario" action="{{ route('update-actividad', $actividad) }}" method="POST">
            @csrf()
            @method('put')

            {{-- Nombre --}}
            <x-adminlte-input name="nombre" label="Nombre" value="{{ $actividad->nombre }}" placeholder="Ingrese un nombre de actividad">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-futbol text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            {{-- Descripción --}}
            <x-adminlte-textarea name="descripcion" label="Descripción" rows=5
                igroup-size="sm" placeholder="Escriba una descripción...">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-lg fa-file-alt text-warning"></i>
                    </div>
                </x-slot>{{ $actividad->descripcion }}
            </x-adminlte-textarea>

            {{-- Por Equipos --}}
            @if ($actividad->por_equipos == 1)
                <x-adminlte-input igroup-size="sm" value="1" type="checkbox" name="por_equipos" 
                    label="Por equipos" checked/>
            @else
                <x-adminlte-input igroup-size="sm" value="1" type="checkbox" name="por_equipos" 
                    label="Por equipos"/>
            @endif

            {{-- Tipo Actividad --}}
            <x-adminlte-select2 name="tipo_id" label="Tipo de actvidad"
                igroup-size="lg">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-danger">
                </div>
            </x-slot>
            <option value="-1">Seleccione una opción...</option>
            <option value="1" @selected($actividad->tipo_id==1)>Deportiva</option>
            <option value="2" @selected($actividad->tipo_id==2)>Recreativa</option>
        </x-adminlte-select2>

        <x-adminlte-button class="btn-flat" type="submit" label="Modificar" 
            theme="primary" icon="fas fa-lg fa-save"/>

        </form>

    </x-adminlte-card>
    
    
@stop