@extends('layouts.app')

@section('title', 'Staff Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 p-0">
            <div class="head-container row w-100 m-0 justify-content-center">
                <div class="col-xl-6 content-left">
                    <div class="titles text-center my-2">
                        <h2>Staff Login</h2>
                        <p class="mt-2">Should you be here? 🥺</p>
                    </div>
                    <div class="action-buttons d-flex justify-content-center align-items-center mb-4">
                        <a href="{{ route('home') }}">
                            <button class="button primary-button mr-2">Return</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0 py-4 my-4 justify-content-center d-flex">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}

                            <label for="email" class="form-label">Email</label>
                            <div class="input-group mb-3">
                                <input type="text" name="email" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <label for="password" class="form-label">Password</label>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
