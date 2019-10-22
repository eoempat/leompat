@extends('layouts.default')

@section('content')
@parent
<h1>Ini view test index!</h1>

<div class="row">
    @foreach($users as $user)
        <div class="col-4 mb-2">
            @component('components.user-card', ['name' => $user->name, 'email' => $user->email])
                @slot('content')
                    Ini konten user card.
                @endslot
            @endcomponent
        </div>
    @endforeach
</div>
@endsection