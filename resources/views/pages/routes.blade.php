@extends('layouts.app')

@section('title', 'Routes')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 p-0">
            <div class="head-container row w-100 m-0 justify-content-center">
                <div class="col-xl-6 content-left">
                    <div class="titles text-center my-2">
                        <h2>Convoy Routes</h2>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed vehicula quam, sit amet hendrerit ipsum. Mauris a massa bibendum purus molestie pulvinar in ut odio.</p>
                    </div>
                    <div class="action-buttons d-flex justify-content-center align-items-center mb-4">
                        <a href="{{ route('donate') }}">
                            <button class="button primary-button mr-2">Donate</button>
                        </a>
                        <a href="{{ route('apply') }}">
                            <button class="button secondary-button ml-2">Book VTC Slot</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0 py-4 my-4">
            <routes-container class="mb-4" :routes="{{ json_encode($routes) }}" :route="{{ json_encode($route ?? []) }}"></routes-container>
        </div>
    </div>
@endsection
