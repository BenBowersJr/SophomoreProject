<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600"> 

    
     <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-auto m-20 p-3 shadow-xl"> <!-- COOL FORM BORDER -->
        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl">
            <form class="flex flex-col items-center">  
                <label for="patient-id">Patient ID</label>
                <input class="bg-white" type="text" value="" name="patient-id" id="patientID" disabled>
                
                <label for="patient-name">Patient Name</label>
                <input class="bg-white" type="text" name="patient-name" id="patient-name" disabled>
                    
                <label for="date">Date</label>
                <input type="date" name="date" id="date" required>
                    
                <button class="text-xl bg-green-900 rounded-xl text-indigo-200 text-serif w-20 h-10 hover:bg-green-700 cursor-pointer mt-4 mb-4 shadow-xl" type="submit">Search</button>
            </form>
            
            <table>
                <thead>
                    <tr>
                        <th><strong>Doctor Name</strong></th>
                        <th><strong>Doctor Appointment</strong></th>
                        <th><strong>Caregiver Name</strong></th>
                        <th><strong>Morning Medicine</strong></th>
                        <th><strong>Afternoon Medicine</strong></th>
                        <th><strong>Night Medicine</strong></th>
                        <th><strong>Breakfast</strong></th>
                        <th><strong>Lunch</strong></th>
                        <th><strong>Dinner</strong></th>
                    </tr>
                </thead>
                
             
                @foreach($data as $d)
                <tr class="body">
                    <td>{{ $doctor['0']->f_name.' '.$doctor['0']->l_name }}</td>
                    <td>{{ $d->appointment_id }}</td>
                    <td>{{ $caregiver[0]->f_name.' '.$caregiver[0]->l_name }}</td>
                    <td>{{ $d->morning_prescription }}</td>
                    <td>{{ $d->afternoon_prescription }}</td>
                    <td>{{ $d->night_prescription }}</td>
                    <td>placeholder breakfast</td>
                    <td>placeholder lunch</td>
                    <td>placeholder dinner</td>
                </tr>
                @endforeach
        </div>
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

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    $(document).ready(function() {
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;       
    $("#date").attr("value", today);
});
</script>