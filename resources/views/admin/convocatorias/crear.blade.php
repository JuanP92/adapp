@section('plugins.DateRangePicker', true)

@extends('adminlte::page')

@section('title', 'Convocatoria')

@section('content_header')
    <h1>Crear Convocatoria</h1>
@stop

@section('content')

    {{-- Minimal --}}
    <x-adminlte-button class="my-1" label="Regresar" theme="primary" 
        onClick="window.location.href='{{ route('convocatorias') }}'"/>

    {{-- Card --}}
    <x-adminlte-card theme="danger" theme-mode="outline">
        
        <form class="container" id="formulario" action="{{ route('registrar-convocatoria') }}" method="POST">
            @csrf()

            {{-- Actividad --}}
            <x-adminlte-select2 name="actividad_id" label="Actvidad"
                igroup-size="lg">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-danger">
                </div>
            </x-slot>
                <option value="-1" selected>Seleccione una opción...</option>
                @foreach ($actividades as $act)
                    <option value="{{ $act->id }}">{{ $act->nombre }}</option>
                @endforeach
            </x-adminlte-select2>

            {{-- Periodo de la convocatoria --}}
            <x-adminlte-date-range name="date_range" placeholder="Seleccione un rango de fechas..."
            label="Periodo de la convocatoria" autocomplete="off">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-danger">
                        <i class="far fa-lg fa-calendar-alt"></i>
                    </div>
                </x-slot>
            </x-adminlte-date-range>
            @push('js')<script>$(() => $("#date_range").val(''))</script>@endpush

            {{-- Semestre --}}
            <x-adminlte-select2 name="semestre" label="Actvidad"
                igroup-size="lg">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-danger">
                </div>
            </x-slot>
                <option value="" selected>Seleccione una opción...</option>
                <option value="I">I SEMESTRE</option>
                <option value="II">II SEMESTRE</option>
            </x-adminlte-select2>

            {{-- Cupos --}}
            <x-adminlte-input name="cupos" label="# de Cupos" placeholder="0" type="number"
            igroup-size="sm" min=1 >
            <x-slot name="appendSlot">
                <div class="input-group-text bg-red">
                    <i class="fas fa-hashtag"></i>
                </div>
            </x-slot>
            </x-adminlte-input>


        <x-adminlte-button class="btn-flat" type="submit" label="Crear" 
            theme="primary" icon="fas fa-lg fa-save"/>

        </form>

    </x-adminlte-card>
    
@stop