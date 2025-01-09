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
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item" href="{{ route('user.profile') }}">Profile</a>
                        <a class="list-group-item" href="{{ route('home') }}">Uprgade Plan</a>
                        <a class="list-group-item" href="{{ route('home') }}">Post Feed</a>
                        <a class="list-group-item" href="{{ route('home') }}">Subdomain Scanner</a>
                        <a class="list-group-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
