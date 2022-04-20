<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Make a payment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>


<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    


    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">
        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">

            <form class="flex flex-col">
                <label class="text-lg" for="patientID">Patient ID</label>
                <input class="flex h-8 rounded-xl p-2 mb-4" type="text" name="patientID" id="patientID">

                <label class="text-lg" for="paid">Enter amount paid (ex: 100.00)</label>
                <input class="flex h-8 rounded-xl p-2 mb-4" type="text" name="paid" id="paid" onkeypress="return isNumberKey(event)">

                <label class="text-lg" for="due">Total amount due</label>
                <input class="flex h-8 rounded-xl p-2 mb-4" type="text" name="due" id="due" disabled>

                <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 w-4/5 mt-4" type="submit" name="submit" id="submit">
            </form>

        </div>
    </div>

</body>

<script>
    function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
</script>