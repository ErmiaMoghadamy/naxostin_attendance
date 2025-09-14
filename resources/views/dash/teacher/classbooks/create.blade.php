@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add ClassBook</h1>
</div>

<div class="" >
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                    {{ $error }}
            </div>
        @endforeach
    @endif
    
    <form x-data="{count: 1}" class="form" method="POST" action="{{ route("dash.teacher.classbooks.store") }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input required name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
        </div>

        <template x-for="i, x in [...Array(count)]">
            <div class="mb-3">
                <label :for="`student_${x+1}`">Student Name #<span x-text="x+1"></span></label>
                <div class="d-flex">
                    <input required name="students[]" placeholder="Enter Student Name" class="form-control" type="text">
                </div>
            </div>
        </template>
        <div x-on:click="count += 1" class="btn btn-success my-3">
            Add
        </div>

       
        <button class="btn btn-dark w-100" type="submit">
            Submit
        </button>
    </form>
</div>
@stop