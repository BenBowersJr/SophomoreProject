<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>


    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">

        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">

            <form class="flex flex-col" method="post" action="api/patient-info">
                    <label class="text-lg" for="filterBy">Filter by:</label>
                    
                    <select class="flex h-8 rounded-xl p-2 mb-4" name="filterBy" id="filterBy">        
                        <option value="patientID">Patient ID</option>
                        <option value="patientName">Patient Name</option>
                        <option value="age">Patient Age</option>
                        <option value="emergencyNumber">Emergency Phone Number</option>
                        <option value="emergencyName">Emergency Name</option>
                        <option value="admissionDate">Date</option>
                    </select>

                    <input class="flex h-8 rounded-xl p-2 mb-4" name="patientID" id="patientID" type="number" placeholder="Patient ID">
                    
                    <input class="flex h-8 rounded-xl p-2 mb-4" name="patientName" id="patientName" type="text" placeholder="Patient Name">

                    <input class="flex h-8 rounded-xl p-2 mb-4" name="age" id="age" type="number" placeholder="Patient Age">

                    <input class="flex h-8 rounded-xl p-2 mb-4" type="text" class="phoneNumber" id="emergencyNumber" name="emergencyNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required>

                    <input class="flex h-8 rounded-xl p-2 mb-4" name="emergencyName" id="emergencyName" type="text" placeholder="Emergency Name">

                    <input class="flex h-8 rounded-xl p-2 mb-4" name="admissionDate" id="admissionDate" type="date">

                    <button class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 w-4/5 mt-4" type="submit">Submit</button>
                
            </form>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Emergency Contact</th>
                    <th>Emergency Contact Name</th>
                    <th>Admission Date</th>
                </tr>

                @if (isset($_SESSION['patient-data']))
                    @foreach ($_SESSION['patient-data'] as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->f_name." ".$patient->l_name }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ $patient->ec_phone }}</td>
                            <td>{{ $patient->ec_name }}</td>
                            <td>{{ $patient->admission_date }}</td>
                        </tr>
                    @endforeach
                @endif

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
        width: 115px;
    }
    table, th, td {
        border: 1px solid black;
    }
</style>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="makeItAPhoneNumber.js"></script>

<script src="patientInfoHideOthersWhileSearching.js"></script>