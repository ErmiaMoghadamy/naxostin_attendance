@extends('layouts.main')

@section('content')

    <div class="vh-100 d-flex flex-column align-items-center justify-content-center gap-2">
        <img class="img-fluid mb-4" style="max-height: 200px;width:auto;aspect-ratio:1/1;" src="/img/gear.png" alt="Gear Logo">

        <h1 class="text-center">
            Na<span style="color: red;">X</span>ostin Attendace
        </h1>

        <p class="text-center">
            This is a demo to show website is up & running!
        </p>

        <a class="btn btn-primary btn-lg" href="{{route('login')}}">
            login
        </a>
    </div>

@stop