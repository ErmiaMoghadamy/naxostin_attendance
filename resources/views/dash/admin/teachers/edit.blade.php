@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Teacher ({{ $teacher->username }})</h1>
</div>

<div class="" >
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                    {{ $error }}
            </div>
        @endforeach
    @endif

    <form class="form" method="POST" action="{{ route("dash.admin.teachers.update", $teacher->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="fullname" class="form-label">Fullname:</label>
            <input value="{{ $teacher->fullname }}" name="fullname" type="text" class="form-control" id="fullname" placeholder="Enter Fullname">
        </div>

        <div class="mb-3">
            <label for="Username" class="form-label">Username:</label>
            <input value="{{ $teacher->username }}" name="username" type="text" class="form-control" id="Username" placeholder="Enter Username">
        </div>

        <div class="mb-3">
            <label for="new_password" class="form-label">New Password:</label>
            <input autocomplete="off" name="new_password" type="password" class="form-control" id="new_password" placeholder="New Password">
        </div>

        <button class="btn btn-dark w-100" type="submit">
            Submit
        </button>
    </form>
</div>
@stop