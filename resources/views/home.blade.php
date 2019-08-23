@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="card-body">
                     <a href="{{ url('/logoutOtherDevices') }}">Logout from other devices</a>
                       <!-- From Feature 1dasdsadas --> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
