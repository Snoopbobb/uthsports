<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uthsports.com</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <span class="utryout">U</span>thsports.com
                </div>

                <div>
                    <p>The <span class="utryout">U</span>ltimate site for youth sports in your area!</p>
                    <h2>COMING SOON</h2>
                </div>
            </div>
        </div>
    </body>
</html>
