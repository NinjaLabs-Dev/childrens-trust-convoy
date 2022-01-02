@extends('layouts.app')

@section('title', 'Apply')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 p-0">
            <div class="head-container row w-100 m-0 justify-content-center">
                <div class="col-xl-6 content-left">
                    <div class="titles text-center my-2">
                        <h2>Applications</h2>
                        <p class="mt-2">Do you want to help out at the event? Well now is your chance! With a variety of roles, from controlling the convoy, to taking amazing photos, and streaming the event - there's something for everyone to apply for.</p>
                    </div>
                    <div class="action-buttons d-flex justify-content-center align-items-center mb-4">
                        <a href="{{ route('donate') }}">
                            <button class="button primary-button mr-2">Donate</button>
                        </a>
                        <a href="{{ route('routes') }}">
                            <button class="button secondary-button ml-2">View Routes</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0 py-4 my-4 @if($applications->empty()) justify-content-center d-flex @endif">
            @if(!$applications->count())
                <div class="col-xl-6">
                    <no-applications></no-applications>
                </div>
            @else
                @foreach($applications as $application)
                    <div class="col-xl-3">
                        <application-glance :application="{{ json_encode($application) }}"></application-glance>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
