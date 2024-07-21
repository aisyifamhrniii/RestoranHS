<style>
    .background {
            background-image: url('{{ asset("assets/background.svg") }}');
        }
    </style>
<x-app-layout>
    {{-- @include('components.restoran.header') --}}
    <x-banner></x-banner> 

    <div class="background ">    
        <x-product></x-product>
    </div> 

    <x-reservation></x-reservation>
    <x-footer></x-footer>
    <x-add></x-add>
</x-app-layout>
