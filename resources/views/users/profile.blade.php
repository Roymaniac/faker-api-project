@extends('layout.app')


@section('content')

@if (is_array($data))

<div class="col-md-12 col-xl-4 mb-3">
    <div class="card" style="border-radius: 15px;">
        <div class="card-body text-center">
            <div class="mt-3 mb-4">
                <img src="{{ $data["avatar"] }}" class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">{{ $data["first_name"] . $data["last_name"] }}</h4>
            <p class="text-muted mb-2">{{ $data["email"] }}</p>
            <button type="button" class="btn btn-light btn-rounded btn-lg">
                <a href="{{ URL ("users") }}">
                    Back Home</a>
            </button>
        </div>
    </div>
</div>
@endif

@endsection
