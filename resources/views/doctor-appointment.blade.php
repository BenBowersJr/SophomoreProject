<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Doctor appointment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">
        <form class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl pt-5" action="api/doctor-appointment" method="post">
            <label class="text-xl" for="patientID">Patient ID</label>
            <input class="flex h-8 rounded-xl p-2 mb-3" type="text" id="patientID" name="patientID" required>

            <label class="text-xl" for="date">Date</label>
            <input class="flex h-8 rounded-xl p-2 mb-3" type="date" id="date" name="date" required>

            <label class="text-xl" for="doctor">Doctor</label>
            <select class="flex h-8 rounded-xl p-2 mb-3" name="doctorID" id="doctor" required>
                <option selected disabled value="">Select doctor</option>
            </select>

            <label class="text-xl" for="patientName">Patient Name</label>
            <input class="flex h-8 rounded-xl p-2 mb-3" type="text" id="patientName" name="patientName" disabled>

            <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 w-40 mt-4" type="submit">

        </form>
    </div>
</body>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>

    let roster = <?php echo json_encode($roster); ?>; // this passes the variable from php to javascript
    let patients = <?php echo json_encode($patients); ?>; 

    // This displays doctors in select 
    $(document).ready(function () {
        $("#date").change(function () { // When the date is changed
            var selected = $(this).val();
            $('.newoption').remove(); // Clear any previously entered options
            for (let r of roster) {
                if (selected == r.date) {
                    // add the new option to html
                    $('#doctor').append(`<option class='newoption' value=${r.doctorID}>${r.doctor}</option>`);
                }
            }
        });
    });

    // This displays the name of the patient when ID is changed
    $(document).ready(function () {
        $("#patientID").change(function () { // When the patientID is changed
            var selected = $(this).val();
            for (let patient of patients) { //Search each patient in array
                // If ID is found
                if (patient.id == selected) { 
                    // Make the new HTML element and replace it
                    pName = patient.f_name + " " + patient.l_name;
                    $('#patientName').replaceWith(`<input placeholder="${pName}" type="text" id="patientName" name="patientName" disabled>`);
                    break;
                }
                // if patient was never found display that none was found
                $('#patientName').replaceWith(`<input placeholder="No Patient Found" type="text" id="patientName" name="patientName" disabled>`)
            }
        });
    });

</script>