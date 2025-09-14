@extends('layouts.dash')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Teachers</h1>
    <a class="btn btn-dark" href="{{ route('dash.admin.teachers.create') }}">New</a>
</div>

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<div >

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Fullname</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $t)
                <tr>
                    <th scope="row">{{ $t->id }}</th>
                    <td> {{ '@'.$t->username }} </td>
                    <td> {{ $t->fullname }} </td>
                    <td class="d-flex d-md-flex flex-column flex-md-row">
                        <button class="btn btn-danger btn-sm">Del</button>
                        <a href="{{ route('dash.admin.teachers.edit', $t->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-dark btn-sm">Ban</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>


</div>
@stop