<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Create new role</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>


<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

   
    
    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl"> <!-- COOL FORM BORDER -->
        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">
            <form class="flex flex-col" action="api/new-role" method="POST">
                <label class="text-lg" for="roleName">New Role Name</label>
                <input class="flex h-8 rounded-xl p-2 mb-2" type="text" name="roleName" id="roleName">

                <label class="text-lg" for="roleName">Access Level</label>
                <input class="flex h-8 rounded-xl p-2 mb-2" type="number" name="accessLevel" id="accessLevel">

                <div class="flex">
                    <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-2 hover:bg-green-700 shadow-xl h-10 w-4/5 mr-1" type="submit" name="OK" id="OK" value="OK">

                    <input class="flex items-center justify-center bg-gray-300 font-serif text-xl text-green-900 rounded-xl mb-4 ml-1 hover:bg-gray-200 shadow-xl h-10 w-4/5" type="button" name="cancel" id="cancel" value="cancel" onclick="location.href='/';">
                </div>

            </form>

            <table>
                <tr>
                    <th>Role Name</th>
                    <th>Access Level</th>
                </tr>
                @foreach ($data as $r )
                    <tr>
                        <td>{{ $r->title }}</td>
                        <td>{{ $r->access_level }}</td>
                    </tr>
                @endforeach
                
            </table>

</body>

<style>
    tr {
        padding: 0.5vh;
        border-bottom: 1px solid #006600;
        display: flex;
        max-width: 1050px;
    }
    th, td {
        width: 115px
    }
    table, th, td {
        border: 1px solid black;
    }
</style>