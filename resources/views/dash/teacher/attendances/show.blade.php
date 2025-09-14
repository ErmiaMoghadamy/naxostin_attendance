@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Attendance Detail ({{ $attendance->year . '/' . $attendance->month . '/' . $attendance->day }})</h1>
</div>

<div class="mb-3">
    <label for="teacher" class="form-label">Classbook:</label>
    <select disabled required name="teacher_id" type="text" class="form-control" id="teacher"
        placeholder="Enter Teacher">
        <option>{{$attendance->classbook->name}}</option>
    </select>
</div>


<div>
    @foreach (json_decode($attendance->content) as $at)
        <div dir="auto" class="py-2 mb-3 row">
            
            <div class="col-6 col-md-9">
                <input value="{{ $at->name }}" disabled class="form-control">
            </div>
            <div class="col-6 col-md-3">
                <button type="button" class="w-100 btn {{ $at->attend ? 'btn-success' : 'btn-danger' }}" name="attend">
                    {{ $at->attend ? 'حاضر' : 'غایب' }}
                </button>
            </div>
        </div>
    @endforeach
</div>
@stop