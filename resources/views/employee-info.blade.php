<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Employee Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">
        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">
    

            <form class="flex flex-col" action="api/employee-info" method="POST">
                <label class="text-lg" for="employeeID">Employee ID</label>
                <input class="flex h-8 rounded-xl p-2" type="number" id="employeeID" name="employeeID">
                
                <label class="text-lg" for="newSalary">New Salary</label>
                <input class="flex h-8 rounded-xl p-2" type="number" id="newSalary" name="newSalary">
                
                <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 w-4/5 mt-4" type="submit" name="submit" id="submit" value="next">
                
            </form>
            
            
            
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Current Salary</th>
                </tr>
            @foreach ($data as $d )
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->f_name." ".$d->l_name }}</td>
                    <td>{{ $d->role_id }}</td>
                    <td>{{ $d->salary }}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>

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