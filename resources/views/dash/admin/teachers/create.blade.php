@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Teacher</h1>
</div>

<div>
    <form class="form" method="POST" action="{{ route("dash.admin.teachers.store") }}">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Fullname:</label>
            <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Enter Fullname">
        </div>

        <div class="mb-3">
            <label for="Username" class="form-label">Username:</label>
            <input name="username" type="text" class="form-control" id="Username" placeholder="Enter Username">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
        </div>

        <button class="btn btn-dark w-100" type="submit">
            Submit
        </button>
    </form>
</div>
@stop