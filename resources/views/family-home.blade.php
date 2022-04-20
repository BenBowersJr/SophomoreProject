<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Family Home Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">
    

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-auto mb-20 p-3 shadow-xl">

        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">

            <form class="flex flex-col">
                <label class="text-lg" for="date">Date</label>
                <input class="flex h-8 rounded-xl p-2 mb-3" type="date" id="date" name="date">

                <label class="text-lg" for="familyCode">Family code</label>
                <input class="flex h-8 rounded-xl p-2 mb-3" type="number" id="familyCode" name="familyCode">

                <label class="text-lg" for="patientID">Patient ID</label>
                <input class="flex h-8 rounded-xl p-2 mb-3" type="number" id="patientID" name="patientID">

                <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-5 hover:bg-green-700 shadow-xl h-10 w-4/5" type="submit" value="search">
            </form>

            <table>
                <tr>
                    <th>Doctor's Name</th>
                    <th>Doctor's Appointment</th>
                    <th>Caregiver's Name</th>
                    <th>Morning Medicine</th>
                    <th>Afternoon Medicine</th>
                    <th>Evening Medicine</th>
                    <th>Breakfast</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                </tr>

                <tr>
                    <td>Armedia De Palma</td>
                    <td>10/20/2021</td>
                    <td>Carl Calewell</td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                </tr>
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

