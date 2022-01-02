@extends('layouts.app')

@section('title', 'Apply')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 p-0">
            <div class="head-container row w-100 m-0 justify-content-center">
                <div class="col-xl-6 content-left">
                    <div class="titles text-center my-2">
                        <h2>{{ $application->title }}</h2>
                        <p class="mt-2">{{ $application->description }}</p>
                    </div>
                    <div class="action-buttons d-flex justify-content-center align-items-center mb-4">
                        <a href="{{ route('apply') }}">
                            <button class="button primary-button mr-2">Return</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0 py-4 my-4 justify-content-center d-flex">
            <div class="col-xl-6">
                <staff-application :application="{{ json_encode($application) }}"></staff-application>
            </div>
        </div>
    </div>
@endsection
