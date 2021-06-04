@extends('layouts.people.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

                    {{-- <x-card class="m-2" title="Titulo de card">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum rerum sunt iste nulla inventore,
                        ducimus provident. Nesciunt, vel quis iusto ipsam ex itaque provident animi architecto omnis fuga voluptates qui?
                        <x-slot name="link">
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Go somewhere</a>
                        </x-slot>
                    </x-card>
                    <x-alert class="alert alert-danger">
                        componente de Alerta erronea
                    </x-alert> --}}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
