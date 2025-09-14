@extends('layouts.dash')

@php
    $date = \Morilog\Jalali\Jalalian::now();
@endphp

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Attendance</h1>
</div>

<form x-data="{students: {{ $classbook->students }} }" class="form" method="POST" action="{{ route("dash.teacher.attendances.store", ["classbook" => $classbook->id]) }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Date:</label>
        <div class="input-group">
            <input value="{{ $date->getYear() }}" required type="number" min="1400" max="1500" name="year" placeholder="سال" class="form-control text-center">
            <input value="{{ $date->getMonth() }}" required type="number" min="1" max="12" name="month" placeholder="ماه" class="form-control text-center">
            <input value="{{ $date->getDay() }}" required type="number" min="1" max="31" name="day" placeholder="روز" class="form-control text-center">

        </div>
    </div>

    <div class="mb-3">
        <label for="teacher" class="form-label">Classbook:</label>
        <select disabled required name="teacher_id" type="text" class="form-control" id="teacher" placeholder="Enter Teacher">
            <option >{{$classbook->name}}</option>
        </select>
    </div>

    <template x-for="i, x in students">
        <div dir="auto" class="py-2 mb-3 row">
            <div class="col-6 col-md-9">
                <input :value="i" required name="students[]" placeholder="Enter Student Name" class="form-control " type="text">
            </div>
            <div x-data="{value: true}" class="col-6 col-md-3">
                <input type="hidden" name="attend[]" :value="value">
                <button type="button" @click="value = !value" x-text="value ? 'حاضر' : 'غایب'" :class="`w-100 btn ${value ? 'btn-success' : 'btn-danger'}`" name="attend">
                </button>
            </div>
        </div>
    </template>
    <div x-on:click="students.push('')" class="btn btn-success my-3">
        Add
    </div>


    <button class="btn btn-dark w-100" type="submit">
        Submit
    </button>
</form>
@stop