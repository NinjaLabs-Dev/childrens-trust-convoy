@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="home-head-container row w-100 m-0">
                <div class="col-xl-6 content-left">
                    <div class="titles">
                        <h2>Raising Money for Children's Trust</h2>
                        <p>Over 24 hours of driving through Scandinavia, Eastern Europe, The Baltic's, The Black Sea, Italy, France, and Iberia raising money for children in need</p>
                    </div>
                    <div class="action-buttons">
                        <button class="button primary-button">About Us</button>
                        <button class="button secondary-button">Book VTC Slot</button>
                    </div>
                </div>

                <div class="col-xl-6 content-right">
                    <donation-info :donationInfo="{{ json_encode($donationInfo) }}"></donation-info>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0">
            <div class="countdown-container">
                <span>1 Month 2 Days 4 Hours</span>
            </div>
        </div>
    </div>
@endsection
