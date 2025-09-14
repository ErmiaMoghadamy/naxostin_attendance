@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Classbooks</h1>
    <a class="btn btn-dark" href="{{ route('dash.teacher.classbooks.create') }}">New</a>
</div>

<div class="row">
    @foreach ($classbooks as $classbook)
        <div class="col col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">
                        {{ $classbook->name }}
                    </h2>
                    <a href="{{ route('dash.teacher.classbooks.show', $classbook->id) }}" class="btn btn-primary w-100 fw-bold">
                        Attendance
                    </a>
                </div>
            </div>

        </div>
    @endforeach
    
    
</div>
@stop