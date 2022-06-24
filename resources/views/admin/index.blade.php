@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>UFPS</b> Actividades Deportivas</h1>
@stop

@section('content')
    <x-adminlte-card theme="red" theme-mode="outline">
        <h3>Menú</h3>
        <div class="container">
            <div class="row">
                <a href="{{ route('actividades') }}" class="col-3">
                    <x-adminlte-callout theme="danger"  
                        class="bg-gradient-red text-center" title="Actividades">
                    </x-adminlte-callout>
                </a>
                <a href="{{ route('convocatorias') }}" class="col-3">
                    <x-adminlte-callout theme="danger"
                        class="bg-gradient-red text-center" title="Convocatorias">
                    </x-adminlte-callout>
                </a>
            </div>
        </div>
    </x-adminlte-card>
    
@stop