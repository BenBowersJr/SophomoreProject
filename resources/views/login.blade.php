<!-- https://tailwindui.com/components/application-ui/forms/sign-in-forms -->

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>
<body class="flex flex-col items-center bg-green-600">

    

    <!-- This is the HOME banner -->
    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl"> <!-- COOL FORM BORDER -->
        <form class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl" action="api/login" method="GET"> 
            
            <!-- Login banner thingie -->
            <div class="flex flex-col items-center w-3/5 items-center mt-10 p-4 mb-5 rounded-xl">
                <div class="font-serif text-5xl mb-4 text-green-900 font-bold">Welcome back!</div>
                <div class="font-serif text-xl text-green-900">Login below.</div>
            </div>

            <input class="w-80 h-10 mt-5 mb-5 pl-3 border-2 border-gray-500" type="text" name="email" placeholder="email"/>

            <input class="w-80 h-10 mt-5 mb-10 pl-3 border-2 border-gray-500" type="password" name="password" placeholder="password"/>

            <input class="w-80 h-16 flex justify-center bg-green-900 w-64 font-serif text-3xl text-indigo-200 hover:bg-green-700 rounded-xl mb-10 shadow-xl" type="submit" name="sub" value="Login">
        </form>
    </div>

    </body>
</html>