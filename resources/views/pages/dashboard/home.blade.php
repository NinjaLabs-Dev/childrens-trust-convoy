@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col-xl-6">
        <slot-management :slots="{{ json_encode($slots) }}"></slot-management>
        <media-management></media-management>
    </div>

    <div class="col-xl-6">
        <route-management :routes="{{ json_encode($routes) }}"></route-management>
    </div>
</div>
@endsection
