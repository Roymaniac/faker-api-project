@extends('layout.app')

@section('content')

@foreach ($data as $value)
<div class="col-md-12 col-xl-4 mb-3">
    <div class="card" style="border-radius: 15px;">
        <div class="card-body text-center">
            <div class="mt-3 mb-4">
                <img src="{{ $value["avatar"] }}" class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">{{ $value["first_name"] ." " . $value["last_name"] }}</h4>
            <p class="text-muted mb-2">{{ $value["email"] }}</p>
            <button type="button" class="btn btn-light btn-rounded btn-md">
                <a href="users/{{ $value["id"] }}">
                    View Profile</a>
            </button>
        </div>
    </div>
</div>
@endforeach

@endsection
