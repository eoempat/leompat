@extends('layouts.default')

@php
    $userContent = 'Ini konten user card dari variable dengan index';
@endphp

@section('content')
@parent
<h1>Ini view test index!</h1>

<div class="row">
    @foreach($users as $key => $user)
        <div class="col-4 mb-2">
            @component('components.user-card', ['name' => $user->name, 'email' => $user->email])
                @slot('content')
                    @even($key)
                    {{ $userContent }} genap.
                    @else
                    {{ $userContent }} ganjil.
                    @endeven
                    {{-- Ini comment --}}
                @endslot
            @endcomponent
        </div>
    @endforeach
</div>
@endsection