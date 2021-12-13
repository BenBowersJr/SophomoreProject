<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
    <title>Doctor Homepage</title>
    <link rel="icon" href="/favicon.ico">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    

</head>
<body class="flex flex-col items-center bg-green-500">
     <div class="flex font-serif text-5xl text-center justify-center text-white bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>
    
    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3"> <!-- COOL FORM BORDER -->

        <div class="flex flex-col bg-green-100 w-full items-center h-auto rounded-xl mb-5">
            <form>
                <label for="filterBy" class="text-xl">Filter by:</label>
                
                <select class="text-xl" name="filterBy" id="filterBy">  
                    <option value="patientName">Patient Name</option>
                    <option value="date">Date</option>
                    <option value="comment">Comment</option>
                    <option value="morningMedicine">Morning Medicine</option>
                    <option value="afternoonMedicine">Afternoon Medicine</option>
                    <option value="eveningMedicine">Evening Medicine</option>
                </select>

                <input class="text-xl" name="patientName" id="patientName" type="text" placeholder="Name of Patient">

                <input class="text-xl" name="date" id="date" type="date">

                <input class="text-xl" name="comment" id="comment" type="text" placeholder="Comments">

                <input class="text-xl" name="morningMed" id="morningMedicine" type="text" placeholder="Morning Medicine">

                <input class="text-xl" name="afternoonMed" id="afternoonMedicine" type="text" placeholder="Afternoon Medicine">

                <input class="text-xl" name="eveningMed" id="eveningMedicine" type="text" placeholder="Evening Medicine">
            
            </form>

            <table>
                <tr class="headings">
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Comment</th>
                    <th>Morning Medicine</th>
                    <th>Afternoon Medicine</th>
                    <th>Evening Medicine</th>
                </tr>

                <tr>
                    <td>Barbara</td>
                    <td>11/22/2021</td>
                    <td>The patient was unruly today</td>
                    <td>Vitamin C</td>
                    <td>None</td>
                    <td>Ibuprofen</td>
                </tr>

                <tr>
                    <td>Barry</td>
                    <td>11/23/2021</td>
                    <td>Knee was sore</td>
                    <td>Vitamin E</td>
                    <td>Cocaine</td>
                    <td>Flintstones gummies (2)</td>
                </tr>
            </table>
        </div>



        <div class="flex flex-col bg-green-100 w-full items-center h-auto rounded-xl">
            <div class="appointmentSearchBarByDate text-xl">
                Upcoming Appointments
                <form>
                <input class="text-xl" type="date">
                <input class="text-xl bg-green-900 rounded-xl text-white text-serif w-20 h-10 hover:bg-green-700 cursor-pointer" type="submit">

            </div>


            <table>
                <tr class="heading">
                    <th>Patient Name</th>
                    <th>Appointment date</th>
                </tr>
            </table>
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

<script src="doctorHomeHIdeOthersWhileSearching.js"></script>

<script>
    //window.onload
</script>


</html>