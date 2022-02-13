@extends('layouts.app')

@section('title', 'Media')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 p-0">
            <div class="head-container row w-100 m-0 justify-content-center">
                <div class="col-xl-6 content-left">
                    <div class="titles text-center my-2">
                        <h2>Media</h2>
                        <p class="mt-2">Did you attend the event? Maybe our media team got your good side. You'll see below the pics our team caught during the event.</p>
                    </div>
                    <div class="action-buttons d-flex justify-content-center align-items-center mb-4">
                        <a href="{{ route('donate') }}">
                            <button class="button primary-button mr-2">Donate</button>
                        </a>
                        <a href="{{ route('home') }}">
                            <button class="button secondary-button ml-2">Home</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0 px-4 m-0">
            <div class="media-outer-container row justify-content-around">
                @foreach($medias as $i => $media)
                    <div class="col-lg-4">
                        <media-container :data="{{ $media }}" @if(!($i % 2)) :right="true" @endif @auth :staff="true" @endauth></media-container>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
