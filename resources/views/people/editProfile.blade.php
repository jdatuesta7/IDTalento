@extends('layouts.people.app')

@section('content')

<div class="editProfile flex-column container ml-5 mt-3">

    @if(session('status'))
        {{-- <div class="alert alert-success" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
        </div> --}}
        <x-alert class="alert alert-success">
            {{ session('status') }}
        </x-alert>
    @endif
    
   <div class="card shadow">

       <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">

        @csrf
        @method('put')

        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">{{__('Profile Update')}}</h3>
                </div>
            </div>
        </div>

        <div class="card-body">

            <div class="row"> 
                <div class="col-6">
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label> {{ __('Name')}} *</label>
                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" placeholder="{{__('Name')}}" required>
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label> {{ __('Email')}} *</label>
                            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="{{__('Email')}}" required>
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label> {{ __('Current Password')}} *</label>
                            <input type="password" name="currentPassword" class="form-control" placeholder="{{__('Current Password')}}" required>
                            @error('currentPassword') 
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            @if(session('passwordError'))
                                    <small class="text-danger">{{session('passwordError')}}</small>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-0 ml-3"></div>
                        <div class="custom-control custom-checkbox col-md-6">
                            <input class="custom-control-input" type="checkbox" value="" id="checkCommerce"
                                data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample">
                            <label class="custom-control-label" for="checkCommerce">
                                {{ __('Change Password') }}
                            </label>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="row">
                            <div class="form-group col-md-12 col-12">
                                <label> {{ __('New Password')}} *</label>
                                <input type="password" name="newPassword" class="form-control" placeholder="{{__('New Password')}}">
                                @error('newPassword')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-12">
                                <label> {{ __('Confirm New Password')}} *</label>
                                <input type="password" name="newPassword_confirmation" class="form-control" placeholder="{{__('Confirm New Password')}}">
                                @error('newPassword')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-5 ml-5">
                    <div class="card-header">
                        <h3 class="mb-0">{{__('Profile Photo')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group col-md-6 col-12">
                            @if (Auth::user()->avatar != null)
                                <div class="profileAvatar" id="avatarUpdate" style="background-image: url( {{ asset(Auth::user()->avatar )}} )"></div>
                            @else 
                                <div class="profileAvatar" id="avatarUpdate" style="background-image: url(https://i.imgur.com/K44e3JJ.jpg)"></div>
                            @endif
                        </div>
                    </div>
                    <div class="card-bottom text-center">
                        <input type="file" id="inputAvatar" name="avatar" accept="image/*"><br>
                        @error('avatar')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <button type="submit" class="btn btn-primary">{{__('Update Profile')}}</button>
                </div>
                <div class="col-2">
                    <a class="btn btn-danger" type="button" href="{{ route('home') }}">{{ __('Cancel') }}</a>
                </div>
            </div>
        </div>
        </form>
   </div>
</div>

@endsection