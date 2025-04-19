@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <p class="title">{{ __('Dashboard') }}</p>
            @if (session('status'))
                <p class="subtitle" role="alert">
                    {{ session('status') }}
                </p>
            @endif
            <p class="subtitle">
                {{ __('You are logged in!') }}
            </p>
        </div>
    </section>
@endsection