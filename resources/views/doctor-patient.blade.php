<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patients</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl"> <!-- COOL FORM BORDER -->

        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl">
            <table class="m-4">
                <tr class="headings">
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Comment</th>
                    <th>Morning Medicine</th>
                    <th>Afternoon Medicine</th>
                    <th>Evening Medicine</th>
                </tr>
            </table>

            <p class="text-xl mb-2">Update Perscription</p>
            <form class="flex flex-col">

                <label class="text-lg" for="comment">Insert Comment</label>
                <input class="flex h-8 rounded-xl p-2" type="text" name="comment" id="comment" required>

                <label class="text-lg" for="morning">Morning Perscription</label>
                <input class="flex h-8 rounded-xl p-2" type="text" name="morning" id="morning">

                <label class="text-lg" for="afternoon">Afternoon Perscription</label>
                <input class="flex h-8 rounded-xl p-2" type="text" name="afternoon" id="afternoon">

                <label class="text-lg" for="evening">Evening Perscription</label>
                <input class="flex h-8 rounded-xl p-2" type="text" name="evening" id="evening">

                <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 w-4/5 mt-4" type="submit">
                {{-- The submit button must be disabled if the appointment is not today! --}}
            </form>
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
        width: 115px;
    }
    table, th, td {
        border: 1px solid black;
    }
</style>