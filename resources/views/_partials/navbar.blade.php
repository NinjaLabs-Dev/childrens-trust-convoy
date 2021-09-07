<div class="row">
    <div class="col-xl-12 p-0">
        <nav class="navbar-container">
            <div class="navbar-top">
                <div class="branding">
                    <img class="logo" src="{{ asset('logo.svg') }}" alt="Children's Trust Logo">

                    @if($countdownBar ?? true)
                        <div class="countdown ml-4">
                            {{-- Vue Element --}}
                            <p class="mb-0">Event Countdown: </p>
                            <p class="mb-0">1 Month 2 Days 4 Hours</p>
                        </div>
                    @endif
                </div>

{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

                <div class="nav-end">
                    <div class="nav-items">
                        <x-nav-item name="Home" route="home"></x-nav-item>
                        <x-nav-item name="About" route="about"></x-nav-item>
                        <x-nav-item name="Routes" route="routes"></x-nav-item>
                        <x-nav-item name="Slots" route="slots"></x-nav-item>
                        <x-nav-item name="Apply" route="apply"></x-nav-item>
                    </div>
                    <div class="cta">
                        <a href="{{ route('donate') }}" class="donate-button">
                            <img src="{{ asset('donate.svg') }}" alt="Yellow and Blue rectangles positions below donate button">
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-bottom row">
                <div class="bar yellow col-xl-12"></div>
                <div class="bar blue col-xl-12"></div>
            </div>
        </nav>
    </div>
</div>


