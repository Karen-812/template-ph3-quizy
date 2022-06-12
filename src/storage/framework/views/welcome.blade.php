<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>

    <!-- Fonts -->

</head>
<body>
    <div>
        @if (Route::has('login'))
        <div>
            @if (Auth::check())
            <a href="{{ url('/home')}}">Home</a>
            @else
                <a href="{{ url('login') }}"></a>
                    Login</a>
                <a href="{{ url('/register') }}"></a>
                    Register</a>
            @endif
        </div>
    @endif
    <div>
        <div>

        </div>
        <div>

        </div>
    </div>
    
    </div>
</body>
</html>