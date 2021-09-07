@props([
    'name',
    'route',
    'active' => false
])

<a
    href="{{ route($route) }}"
    class="nav-item
            @if($active || Request::routeIs($route)) active @endif
    ">

    {{ $name }}
</a>
