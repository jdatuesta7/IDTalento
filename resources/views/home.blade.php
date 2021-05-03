@extends('layouts.app')

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
                    {{Auth::user()->socialProfiles[0]->social_id}}<br>
                    {{Auth::user()->socialProfiles[0]->social_name}}<br>
                    <img src="{{Auth::user()->socialProfiles[0]->social_avatar}}" alt=""><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
