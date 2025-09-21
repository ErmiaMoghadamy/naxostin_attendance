@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    @if (auth()->user()->role == "admin")
        <div class="col-12 col-md-3 p-3">
            <a href="{{ route('dash.admin.teachers.index') }}" class="underline-none text-decoration-none">
                <div class="text-light bg-dark px-3 pt-3 pb-1 rounded border">
                    <h2 class="mb-">Teachers</h2>
                    <p class="py-2"></p>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-3 p-3">
            <a href="{{ route('dash.admin.classbooks.index') }}" class="underline-none text-decoration-none">
                <div class="text-light bg-dark px-3 pt-3 pb-1 rounded border">
                    <h2 class="mb-">Classbooks</h2>
                    <p class="py-2"></p>
                </div>
            </a>
        </div>

    @elseif (auth()->user()->role == "teacher")
        <div class="col-12 col-md-3 p-3">
            <a href="{{ route('dash.teacher.classbooks.index') }}" class="underline-none text-decoration-none">
                <div class="text-light bg-dark px-3 pt-3 pb-1 rounded border">
                    <h2 class="mb-">My Classbooks</h2>
                    <p class="py-2"></p>
                </div>
            </a>
        </div>
    @endif
  
</div>
@stop