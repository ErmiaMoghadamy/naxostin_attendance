@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Classbooks</h1>
    <a class="btn btn-dark" href="{{ route('dash.admin.classbooks.create') }}">New</a>
</div>

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<div class="row">
    @foreach ($classbooks as $classbook)
        <div class="col col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="fs-3 text-center mb-4">
                        {{ $classbook->name }} ({{ $classbook->user->fullname }})
                    </h2>
                    <div class="d-flex flex-row gap-3">
                        <a href="{{ route('dash.admin.classbooks.show', $classbook->id) }}" class="btn btn-primary fw-bold w-50">
                            Attendance
                        </a>
                        <form method="POST" action="{{ route('dash.admin.classbooks.destroy', $classbook->id) }}" class="d-block w-50">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger w-100" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endforeach
    
    
</div>
@stop