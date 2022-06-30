{{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'Nombre',
    'Semestre',
    'Cupos',
    ['label' => 'Actions', 'no-export' => true, 'width' => 15],
];

@endphp

@extends('adminlte::page')

@section('title', 'Convocatorias')

@section('content_header')
    <h1>Convocatorias</h1>
@stop

@section('content')

    {{-- Minimal --}}
    <x-adminlte-button class="my-1" label="Crear" theme="primary"
        onClick="window.location.href='{{ route('crear-convocatoria') }}'"/>

    {{-- Card --}}
    <x-adminlte-card theme="danger" theme-mode="outline">
        {{-- Minimal example / fill data using the component slot --}}
        <x-adminlte-datatable id="table" :heads="$heads" head-theme="dark"
            bordered with-buttons>
            @if (@isset($convocatorias->data))
                <tr>
                    <td colspan="5">No hay convocatorias registradas</td>
                </tr>
            @else
                @foreach($convocatorias as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->actividad->nombre }}</td>
                        <td>{{ $row->semestre }} SEMESTRE</td>
                        <td>{{ $row->cupos }}</td>
                        <td>
                            <form class="d-inline" action="{{ route('modificar-convocatoria', $row) }}" method="post">
                                @csrf()

                                <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </button>
                            </form>
                            

                            <x-adminlte-button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete"
                                data-toggle="modal" data-target="#modalDelete{{ $row->id }}" icon="fa fa-lg fa-fw fa-trash"/>

                            <x-adminlte-button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"
                                 data-toggle="modal" data-target="#detallesModal{{ $row->id }}" icon="fa fa-lg fa-fw fa-eye"/>
                        </td>
                    </tr>

                    {{-- Detalles --}}
                    <x-adminlte-modal id="detallesModal{{ $row->id }}" title="{{ $row->actividad->nombre }}" theme="red"
                        icon="fas fa-bolt" size='lg'>
                            {{-- Descripcion --}}
                            <x-adminlte-card title="Descripción" theme="red" theme-mode="outline"
                             header-class="text-uppercase rounded-bottom border-danger">
                                <p>{{ $row->actividad->descripcion }}</p>
                                <x-adminlte-callout theme="danger" title="Detalles">
                                    <ul>
                                        <li>{{ ($row->actividad->tipo_id==1)?'Actividad deportiva':'Actividad recreativa' }}</li>
                                        <li>{{ ($row->actividad->por_equipos==1)?'En equipos':'Individuales' }}</li>
                                        <li>Periodo de la convocatoria: {{ $row->fecha_ini }} - {{ $row->fecha_fin }}</li>
                                        <li>Cupos: {{ $row->cupos }}</li>
                                    </ul>
                                </x-adminlte-callout>
                            </x-adminlte-card>
                    </x-adminlte-modal>

                    {{-- Custom --}}
                    <x-adminlte-modal id="modalDelete{{ $row->id }}" title="¡Advertencia!" size="lg" theme="red"
                        icon="fas fa-bell" v-centered>
                            <div>¿Esta seguro de que desea borrar la convocatoria <b>{{ $row->nombre }}</b>?</div>
                            <x-slot name="footerSlot">
                                <form action="{{ route('delete-convocatoria', $row) }}" method="post">
                                    @csrf()
                                    @method('delete')

                                    <x-adminlte-button type="submit" class="mr-auto" theme="success" label="Aceptar"/>

                                </form>
                                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                            </x-slot>
                    </x-adminlte-modal>

                @endforeach
            @endif

        </x-adminlte-datatable>

    </x-adminlte-card>

    
@stop