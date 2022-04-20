<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Create new roster</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>


    

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">

        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">

            <form class="flex flex-col" action="api/new-roster" method="post">

                @foreach ($caregivers as $c)
                <input type="hidden" name="{{ 'caregiver'.$loop->iteration }}" value="{{ $c->f_name." ".$c->l_name }}">
                @endforeach

                @foreach ($supervisors as $s)
                    <input type="hidden" name="{{ 'supervisor'.$loop->iteration }}" value="{{ $s->f_name." ".$s->l_name }}">
                @endforeach

                @foreach ($doctors as $d)
                    <input type="hidden" name="{{ 'doctor'.$loop->iteration }}" value="{{ $d->f_name." ".$d->l_name }}">
                @endforeach

                <label class="text-lg" for="date">Type Date to create Roster for</label>
                <input class="flex h-8 rounded-xl pl-2 mb-4" type="date" name="date" id="date" required>

                <label class="text-lg" for="supervisor">Select Supervisor for the day</label>
                <select class="flex h-8 rounded-xl pl-2 mb-4" name="supervisorID" id="supervisor" required>
                    <option selected disabled value="">Select supervisor</option>

                    @foreach ($supervisors as $s )
                    <option value="{{ $s->id }}">{{ $s->f_name." ".$s->l_name }}</option>
                    @endforeach
                </select>
                    
                <label class="text-lg" for="doctor">Select Doctor for the day</label>
                <select class="flex h-8 rounded-xl pl-2 mb-4" name="doctorID" id="doctor" required>
                    <option selected disabled value="">Select Doctor</option>
                    @foreach ($doctors as $d )
                    <option value="{{ $d->id }}">{{ $d->f_name." ".$d->l_name }}</option>
                    @endforeach
                </select>

                <label class="text-lg" for="caregiver1">Select Caregiver for the day</label>
                <select class="flex h-8 rounded-xl pl-2 mb-4" name="caregiver1ID" id="caregiver1" required>
                    <option selected disabled value="">Select caregiver 1</option>
                    @foreach ($caregivers as $c )
                    <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
                    @endforeach
                </select>

                <label class="text-lg" for="caregiver2">Select Caregiver for the day</label>
                <select class="flex h-8 rounded-xl pl-2 mb-4" name="caregiver2ID" id="caregiver2" required>
                    <option selected disabled value="">Select caregiver 2</option>
                    @foreach ($caregivers as $c )
                        <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
                    @endforeach
                </select>

                <label class="text-lg" for="caregiver3">Select Caregiver for the day</label>
                <select class="flex h-8 rounded-xl pl-2 mb-4" name="caregiver3ID" id="caregiver3" required>
                    <option selected disabled value="">Select caregiver 3</option>
                    @foreach ($caregivers as $c )
                        <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
                    @endforeach
                </select>
                
                <label class="text-lg" for="caregiver4">Select Caregiver for the day</label>
                <select class="flex h-8 rounded-xl pl-2 mb-4" name="caregiver4ID" id="caregiver4" required>
                    <option class="flex h-8 rounded-xl" selected disabled value="">Select caregiver 4</option>
                    @foreach ($caregivers as $c )
                        <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
                    @endforeach
                </select>

                <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 w-4/5 mt-4" type="submit">
            </form>
        </div>
    </div>

</body>