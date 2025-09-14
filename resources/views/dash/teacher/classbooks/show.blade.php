@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Classbook Detail ({{ $classbook->name }})</h1>
    <a class="btn btn-dark" href="{{ route('dash.teacher.attendances.create', ['classbook' => $classbook->id]) }}">
        New Attendace
    </a>

</div>

<div class="row mb-4 border-bottom pb-3">
    @foreach (json_decode($classbook->students) as $c)
        <div class="col col-md-6 col-lg-4 py-2">
            <div dir="auto" class="d-flex  align-items-center gap-3 border shadow p-3">
                <span style="display: none">{{ $c }}</span>
                
                <div class="d-flex justify-content-center">
                    <img style="border-radius: 50%;max-height: 60px" class="rounded-circle" src="/img/avatar.png" alt="">
                </div>
                <h3 dir="auto" class="text-center fs-5">
                    {{ $c }}
                </h3>
                
            </div>
        </div>
    @endforeach
</div>

<div class="row">
    @foreach ($attendaces as $attendace)
        <div class="col col-md-4 col-lg-3 py-2">
            <div class="border shadow p-3">
                <h3 dir="ltr" class="fs-5">
                    {{ $attendace->year }}/{{ $attendace->month }}/{{ $attendace->day }}
                </h3>
                <a href="{{ route('dash.teacher.attendances.show', ['classbook' => $attendace->classbook, 'attendance' => $attendace]) }}" class="btn btn-dark w-100">
                    Detail
                </a>
            </div>
        </div>
    @endforeach
</div>
@stop