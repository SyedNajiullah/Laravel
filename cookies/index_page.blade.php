<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
    <style>
        body{
            font-family: sans-serif;
            text-align: center;
        }

        .btn{
            padding: 2rem;
            background-color: #8ce99a;
            color: #fff;
            border: 2px solid #fff;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .btn:hover, .btn:active{
            transform: scale(1.5, 1.5);
        }

        .all-form{
            margin-top: 5rem;
        }
    </style>
</head>
<body>

    @if ($cookie)
        <h4>Cookie counter: {{ $cookie }}</h4>
    @else
        <h4>Cookie counter: 0</h4>
    @endif


    <form action="{{ route('index') }}" method="POST" class = 'all-form'>
        @csrf
        <button type = 'submit' class = 'btn'>Incremet</button>
    </form>
</body>
</html>