<div class="row">
    <div class="col-xl-12 p-0">
        <nav class="navbar-container">
            <div class="navbar-top row">
                <div class="branding col-xl-4">
                    <img class="logo" src="{{ asset('logo.svg') }}" alt="Children's Trust Logo">

                    @if($next_event ?? false)
                        <event-countdown
                            class="ml-2"
                            :event="{{ json_encode($next_event) }}">
                        </event-countdown>
                    @endif
                </div>

{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

                <div class="nav-end col-xl-8 justify-content-end">
                    <div class="nav-items">
                        <x-nav-item name="Home" route="home"></x-nav-item>
                        <x-nav-item name="Media" route="media"></x-nav-item>
                        <x-nav-item name="Routes" route="routes"></x-nav-item>
                        <x-nav-item name="Slots" route="slots"></x-nav-item>
                        <x-nav-item name="Apply" route="apply"></x-nav-item>
                        @auth
                            <x-nav-item name="Staff" route="dashboard"></x-nav-item>
                        @endauth
                    </div>
                    <div class="cta">
                        <a href="{{ route('donate') }}" class="donate-button">
                            <img src="{{ asset('donate.svg') }}" alt="Yellow and Blue rectangles positions below donate button">
                        </a>
                    </div>

                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-danger mx-4" type="submit">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>

            <div class="navbar-bottom row">
                <div class="bar yellow col-xl-12"></div>
                <div class="bar blue col-xl-12"></div>
            </div>
        </nav>
    </div>
</div>


