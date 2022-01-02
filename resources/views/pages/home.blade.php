@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 p-0">
            <div class="home-head-container row w-100 m-0">
                <div class="col-xl-6 content-left">
                    <div class="titles">
                        <h2>Raising Money for The Children's Trust</h2>
                        <p class="mt-2">Over 24 hours of driving through Scandinavia, Eastern Europe, The Baltic's, The Black Sea, Italy, France, and Iberia raising money for children in need</p>
                    </div>
                    <div class="action-buttons">
                        <a href="{{ route('donate') }}">
                            <button class="button primary-button">Donate</button>
                        </a>
                        <a href="{{ route('slots') }}">
                            <button class="button secondary-button">Book VTC Slot</button>
                        </a>
                    </div>
                </div>

                <div class="col-xl-6 content-right pr-0 px-sm-5">
                    <donation-info :donation-info="{{ json_encode($donationInfo) }}"></donation-info>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0">
            @if($next_event ?? false)
                <event-countdown
                    class="countdown-container"
                    :event="{{ json_encode($next_event) }}"
                    :slim="true">
                </event-countdown>
            @endif
        </div>
        <div class="col-xl-12 my-4 main-content">
            <about-us></about-us>

            <div class="row mt-4">
                <div class="col-xl-6 d-flex">
                    <route-up-sell route="{{ route('routes') }}"></route-up-sell>
                </div>
                <div class="col-xl-6">
                    <donate-up-sell route="{{ route('donate') }}"></donate-up-sell>
                </div>
            </div>

            <not-affiliated class="mt-4"></not-affiliated>
        </div>
    </div>
@endsection
