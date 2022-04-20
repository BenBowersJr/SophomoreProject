<!--
<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}"/>
-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eranthis Communities Home</title>

        <link rel="icon" href="/favicon.ico">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    </head>

    <body class="flex flex-col items-center bg-green-600">

        <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-56 items-center w-full cursor-default">
            Eranthis<br/>Communities
        </div>

        

        <div class="flex flex-col bg-green-900 rounded-xl p-3 w-3/5 mt-10 mb-10 shadow-xl">
            <div class="flex flex-col items-center w-full justify-around bg-indigo-200 w-3/5 h-72 rounded-xl">

                <button class="bg-green-900 w-64 font-serif text-3xl text-indigo-200 rounded-xl h-1/5 hover:bg-green-700 shadow-xl" type="button" onclick="window.location.href='/login'">Login</button>

                <button class="bg-green-900 w-64 font-serif text-3xl text-indigo-200 rounded-xl h-1/5 hover:bg-green-700 shadow-xl" type="button" onclick="window.location.href='/register'">Register</button>
            </div>
        </div>

    </body>
</html>
