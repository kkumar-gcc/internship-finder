<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi page Form</title>

    <link rel="stylesheet" href="{{ asset('/css/myStyle.css')}}" type="text/css">
</head>

<body>
    <div class="logo">
        <h1>intern <span> Finder</span></h1>
    </div>
    <h2>registration form</h2>
    <button class="logs">Login</button>
    <button class="logs">Register</button>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="illustrator-container">
                <img src="/images/illustration2.svg" alt="notify">
            </div>

            <div class="child-container radio-container child-active">
                @foreach($registration_types as $key=> $value)
                <input type="radio" name="userType" value="{{$value}}" checked>{{$value}}<br>
                @endforeach
                <div class=" ">
                    <a href="#" class="btn btn-next  width-50 ml-auto">Next</a>
                </div>
            </div>
            <div class="child-container">
                <input type="text" placeholder="Full Name" id="name" name="name" required>
                <div class="btn-group ">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>
            <div class="child-container">
                <input type="email" placeholder="Email" id="name" name="email" required>
                <div class="btn-group ">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>

            <div class="child-container">
                <input type="file" class="custom-file-input" name="photo" data-toggle="custom-file-input">
                <div class="btn-group ">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>
            <div class="child-container">
                <input type="password" placeholder="Password" id="name" required name="password">
                <input type="password" placeholder="Confirm Password" name="password_confirmation" id="name">
                <div class="btn-group ">
                    <a class="btn btn-prev">Previous</a>
                    <button type="submit" class="btn btn1">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>

        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('/js/myScript.js')}}"></script>
</body>

</html>