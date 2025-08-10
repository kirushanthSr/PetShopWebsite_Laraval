@extends('layouts.app')

@section('title','Home')

@section('content')
    <x-nav-slider />
    <main class="hero">
        <div class="container">
            <x-cards />
            <x-appointment-form />
            <x-about-us />
        </div>
    </main>
@endsection
