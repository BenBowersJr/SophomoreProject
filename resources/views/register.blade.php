<!-- change stylesheet ref -->

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">
    

    <!-- This is the HOME banner -->
    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl"> <!-- COOL FORM BORDER -->
        <form class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl" action="api/register" method="POST">


            <!-- The WELCOME banner above the form -->
            <div class="flex flex-col items-center w-3/5 items-center mt-10 p-4 mb-10 rounded-xl">
                <div class="font-serif text-5xl mb-4 text-green-900 font-bold">Welcome!</div>
                <div class="font-serif text-xl text-green-900">Register below.</div>
            </div>

            <p class="flex justify-start text-xl w-80">Select your role</p>

            <select name="userType" id="userType" class="w-80 h-10 border-2 border-gray-500 pl-3">        
                <option value="Family Member">Family Member</option>
                <option value="Patient" class="ShowExtraFields">Patient</option>
                <option value="Caregiver">Caregiver</option>
                <option value="Doctor">Doctor</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Admin">Admin</option>
            </select>

            <div id="normal-register">

                <div class="flex flex-col mt-5 mb-5 w-80">
                    <label for="fName" class="text-xl">First Name</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="text" name="fName" id="fName" required>
                </div>

                <div class="flex flex-col mb-5">
                    <label for="lName" class="text-xl">Last Name</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="text" name="lName" id="lName" required>
                </div>

                <div class="flex flex-col mb-5">
                    <label for="email" class="text-xl">Email Address</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="email" name="email" id="email" required>
                </div>

                <div class="flex flex-col mb-5">
                    <label for="phone" class="text-xl">Phone Number</label>
                    <input class="phoneNumber h-10 border-2 border-gray-500 pl-3" type="text" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required>
                </div>

                <div class="flex flex-col mb-5">
                    <label for="password" class="text-xl">Password</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="password" name="password" id="password" required>
                </div>

                <div class="flex flex-col mb-10">
                    <label for="DOB" class="text-xl">Date of birth</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="date" name="DOB" id="DOB">
                </div>

            </div>

            <div id="isPatientSelected">

                <div class="flex justify-center text-3xl mb-5">Patient Info</div>

                <div class="flex flex-col mb-5">
                    <label for="FamilyPassword" class="text-xl">Family Password</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="password" name="FamilyPassword" id="FamilyPassword">
                </div>

                <div class="flex flex-col mb-5">
                    <label for="FamilyContactName" class="text-xl">Emergency Contact Name</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="text" name="FamilyContactName" id="FamilyContactName">
                </div>
                
                <div class="flex flex-col mb-5">
                    <label for="FamilyContactNumber" class="text-xl">Emergency Contact Phone Number</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="text" class="phoneNumber" name="FamilyContactNumber" id="FamilyContactNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12">
                </div>
                
                <div class="flex flex-col mb-8">
                    <label for="FamilyRelation" class="text-xl">Relation to Patient</label>
                    <input class="h-10 border-2 border-gray-500 pl-3" type="text" name="FamilyRelation" id="FamilyRelation">
                </div>

            </div>

            <input class="flex justify-center bg-green-900 w-64 font-serif text-3xl text-indigo-200 rounded-xl h-16 mb-10 hover:bg-green-700 shadow-xl" type="submit" name="sub"/>
        </form>
    </div>

<!-- Scripts are here -->

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="makeItAPhoneNumber.js"></script>

<script>
    $("#userType").change(displayExtras).change();//when the page loads, run displayExtras once

    $("#userType").change(displayExtras);//every time a new option is selected from the dropdown...

    function displayExtras(){//show the extra fields based on wether or not the dropdown option selected is patient
        if ($(this).val() == "Patient") {
            $('#isPatientSelected').show();
            $('#isPatientSelected').attr('required', '');
        }
        else {
            $('#isPatientSelected').hide();
            $('#isPatientSelected').removeAttr('required');
        }
    }
            
    $("#userType").trigger("change");

</script>

<!-- Scripts are here -->

</body>
</html>