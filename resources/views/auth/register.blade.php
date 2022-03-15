@extends('layouts.app')
@section('styleLink')
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">
@endsection
@section('content')

    <div class="body-container">
        <div class="header">
            <h2>Registration Form</h2>
        </div>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="illustrator-container">
                    <img src="./illustration2.svg" alt="notify">
                </div>
                <div class="form-container">
                    <div class="child-container radio-container  child-active">
                        @foreach ($registration_types as $key => $value)
                            <input type="radio" name="userType" value="{{ $value }}"
                                checked>{{ $value }}<br>
                        @endforeach
                        <div class=" ">
                            <a href="#" class="btn btn-next  width-50 ml-auto logs">Next</a>
                        </div>
                    </div>
                    {{-- <div class="child-container">
                        <form action="#" method="POST" class="form">
                            <input type="text" placeholder="Full Name" id="name" name="name" required>
                            <div class="btn-group ">
                                <a href="#" class="btn btn-prev logs">Previous</a>
                                <a href="#" class="btn btn-next logs">Next</a>
                            </div>
                        </form>
                    </div> --}}
                    <div class="child-container">
                        <input type="email" placeholder="Email" id="email" name="email" required>
                        <div class="btn-group ">
                            <a href="#" class="btn btn-prev logs">Previous</a>
                            <a href="#" class="btn btn-next logs">Next</a>
                        </div>
                    </div>

                    {{-- <div class="child-container">
                        <input type="file" class="custom-file-input" name="photo" data-toggle="custom-file-input">
                        <div class="btn-group ">
                            <a href="#" class="btn btn-prev logs">Previous</a>
                            <a href="#" class="btn btn-next logs">Next</a>
                        </div>
                    </div> --}}
                    <div class="child-container">
                        <input type="password" placeholder="Password" id="name" required name="password">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" id="name">
                        <div class="btn-group ">
                            <a class="btn btn-prev logs">Previous</a>
                            <button type="submit" class="btn btn1 logs">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/myScript.js') }}"></script>
@endsection
   

    