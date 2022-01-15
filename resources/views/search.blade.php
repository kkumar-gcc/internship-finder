@extends('layouts.app')

@section('content')

    <div>
        @foreach ($interns as $intern )
        
            <div class="p-4 m-4">
                <h2>{{ $intern->first_name }}<h2>
                    <p>{{ $intern->area_of_interest }}</p>
            </div>
        @endforeach
    </div>

@endsection
