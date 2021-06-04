@extends('layouts.people.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }} {{Auth::user()->name}}!<br>
                    @if(empty(Auth::user()->password))
                    {{Auth::user()->getSocialProfiles[0]->social_id}}<br>
                    {{Auth::user()->getSocialProfiles[0]->social_name}}<br>
                    <img src="{{Auth::user()->getSocialProfiles[0]->social_avatar}}" alt=""><br>
                    @endif
                </div>
            </div>
        
            <x-alert class="mt-2 alert alert-danger">
                componente de Alerta erronea
            </x-alert>
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Example</h4>
                </div>

                <div class="card-body">
                    <h5 class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores odio vero aliquid velit consectetur quaerat cum maxime, ipsam repellendus? Blanditiis molestiae alias iste optio saepe adipisci architecto suscipit, consectetur ipsum?</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <x-card class="m-3 pn-2 col-md-5 col-12" title="Carta 1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum rerum sunt iste nulla inventore,
            ducimus provident. Nesciunt, vel quis iusto ipsam ex itaque provident animi architecto omnis fuga voluptates qui?
            <x-slot name="link">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Go somewhere</a>
            </x-slot>
        </x-card>
        <x-card class="m-3 pn-2 col-md-5 col-12" title="Carta 2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum rerum sunt iste nulla inventore,
            ducimus provident. Nesciunt, vel quis iusto ipsam ex itaque provident animi architecto omnis fuga voluptates qui?
            <x-slot name="link">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Go somewhere</a>
            </x-slot>
        </x-card>
    </div>
</div>
@endsection
