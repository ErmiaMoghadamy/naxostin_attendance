@extends('layouts.main')

@section('content')
<div class="vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="card w-100" style="max-width: 600px;">
        <div class="card-header">
            <h1 class="text-center">login</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form class="form" method="POST" action="{{ route("loginAttempt") }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input required name="username" type="text" class="form-control" id="username" placeholder="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input required name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </div>
</div>
@stop