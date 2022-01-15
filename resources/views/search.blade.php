@extends('layouts.app')

@section('content')

    <div>
        @foreach ($interns as $intern)

            <div class="p-4 m-4">
                <h1>{{ $intern->first_name }}</h1>
                <p> {{ $intern->area_of_interest }} </p>
            </div>

        @endforeach
    </div>

@endsection
