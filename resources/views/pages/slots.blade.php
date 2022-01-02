@extends('layouts.app')

@section('title', 'Slots')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 p-0">
            <div class="head-container row w-100 m-0 justify-content-center">
                <div class="col-xl-6 content-left">
                    <div class="titles text-center my-2">
                        <h2>Parking Slots</h2>
                        <p class="mt-2">If you and your VTC are interested in attending the event, why not book yourself a slot? This slot will entitle you to an area just for your VTC, with a specific departure order, making for an easy departure, and an amazing way for your VTC to support the event.</p>
                    </div>
                    <div class="action-buttons d-flex justify-content-center align-items-center mb-4">
                        <a href="{{ route('donate') }}">
                            <button class="button primary-button mr-2">Donate</button>
                        </a>
                        <a href="{{ route('routes') }}">
                            <button class="button secondary-button ml-2">Convoy Routes</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0 px-4 m-0">
            <div class="slot-outer-container row justify-content-around">
                @foreach($slots as $slot)
                    <div class="col-lg-4">
                        <slot-container :data="{{ $slot }}" @if(!($slot->number % 2)) :right="true" @endif></slot-container>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
