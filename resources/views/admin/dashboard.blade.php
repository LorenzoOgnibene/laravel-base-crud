@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary py-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"> User: <span class="fw-bold">{{ Auth::user()->name }} </span></div>
 
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p class="m-0">Welcome to your dashboard click on the button below to be redirected to your profile, otherwise you can reach your projects through the navbar.</p>
                    <a href="{{route('profile.edit')}}" class="btn btn-info d-inline-block ms-auto mt-5">Go to Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
