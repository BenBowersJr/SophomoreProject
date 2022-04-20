<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Approve User</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>


<body class="flex flex-col items-center bg-green-600">

     <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    
        <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">
            {{-- <form action="/api/approval" method="POST"> --}}
            <form class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4" action="api/approval" method="POST">

                <table>
                        <tr>
                            <th>Approve</th>
                            <th>Name</th>
                            <th>Role</th>
                        </tr>

                        @foreach($patient as $key => $d)
                        <tr>
                            <input type="hidden" name="patient_total" value="{{ count($patient) }}">
                            <td><input type="checkbox" name="patient_approve_{{ $key }}"></td>
                            <input type="hidden" name="patient_id_{{ $key }}" value="{{ $d->id }}">
                            <td>{{ $d->f_name . " " . $d->l_name }}</td>
                            <td>Patient</td>
                        </tr>
                        @endforeach

                        @foreach($family as $key => $d)
                        <tr>
                            <input type="hidden" name="family_total" value="{{ count($family) }}">
                            <td><input type="checkbox" name="family_approve_{{ $key }}"></td>
                            <input type="hidden" name="family_id_{{ $key }}" value="{{ $d->id }}">
                            <td>{{ $d->f_name . " " . $d->l_name }}</td>
                            <td>Family Member</td>
                        </tr>
                        @endforeach

                        @foreach($employee as $key => $d)
                        <tr>
                            <input type="hidden" name="employee_total" value="{{ count($employee) }}">
                            <td><input type="checkbox" name="employee_approve_{{ $key }}"></td>
                            <input type="hidden" name="employee_id_{{ $key }}" value="{{ $d->id }}">
                            <td>{{ $d->f_name . " " . $d->l_name }}</td>
                            <td>{{ ucwords($roles[$d->role_id-1]->title) }}</td>
                        </tr>
                        @endforeach

                </table>

                <input class="mt-4 flex justify-center items-center bg-green-900 w-auto font-serif p-4 text-xl text-indigo-200 rounded-xl  hover:bg-green-700 shadow-xl" type="submit" name="submit" id="submit" value="Approve selected users">

            </form>
    </div>    
</body>

<!-- Ben's styling for the tables -->
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