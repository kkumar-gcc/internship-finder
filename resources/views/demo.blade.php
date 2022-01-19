<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- jQuery CDN  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
    <title>Document</title>
    <style>
        .bootstrap-tagsinput
        {
            margin: 0;
            width: 100%;
            padding: 0.5rem 0.75rem 0;
            font-size: 1rem;
            line-height: 1.25;
            transition: border-color 0.15s ease-in-out;
        }

        .bootstrap-tagsinput input{
            margin-bottom: 0.5em;
            background:  no-repeat  bottom,50% calc(100%-1px);
            background-image: none,none;
            width: 70%;
            border: 0;
            height: 36px;
            transition: background 0s ease-out;
            padding-left: 0;
            padding-right: 0;
            border-radius: 0;
        }

        .bootstrap-tagsinput .label-info{
            display: inline-block;
            background-color: rgb(56, 55, 55);
            padding: 5px;
            
            border-radius: 0.25rem;
            margin-bottom: 0.4em;
            color: white;
        }
        .bootstrap-tagsinput .tag [data-role="remove"]::after
        {
            margin-left: 10px;
            content :"\00d7";
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div>
        <div class="bg-secondary">
            <input type="text" name="tags" data-role="tagsinput" id="tags" class="form-control">
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('input[name="tags"]').tagsinput({
                trimValue: true,
                confirmKeys: [44],
                focusClass: "",

            });
        })
    </script>
</body>

</html>
