@extends('layout.app')
@section('title','Consulta Pico y Placa')
@section('content')
<section class="mx-20 h-full">
    <div class="h-20 flex items-center justify-between">
        <div>
            <span class="text-2xl font-bold">Pico y Placa</span>
        </div>
        <div>
            <a class="p-3 rounded-lg bg-black text-white" href="{{route('filament.admin.pages.dashboard')}}">Administrador</a>
        </div>
    </div>
    <div class=" h-2/3 my-4">
        <div class="text-center mt-5">
            <h1 class="font-bold text-4xl mb-3 text-[#3A7D44]">Consultar Pico y Placa</h1>
            <p class="">Introduce la placa de tu vehículo para verificar si tienes permiso para transitar en la ciudad de Quito.</p>
            {{-- Componente Livewire --}}
            <livewire:form-consultar>
        </div>
    
    </div>

</section>

@endsection
