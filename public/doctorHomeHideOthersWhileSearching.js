$("#filterBy").change(hideOthers).change();//run this code once when the page loads

$("#filterBy").change(function() {//every time a new option is selected...
   hideOthers();
});

function hideOthers(){//give the user the correct field to fill out based on their selection in the filter by dropdown
    if ($(this).val() == "patientName") {
            $('#patientName').show();
            $('#patientName').attr('required', '');
        }
        else {
            $('#patientName').hide();
            $('#patientName').removeAttr('required');
        }

        if ($(this).val() == "date") {
            $('#date').show();
            $('#date').attr('required', '');
        }
        else {
            $('#date').hide();
            $('#date').removeAttr('required');
        }

        if ($(this).val() == "comment") {
            $('#comment').show();
            $('#comment').attr('required', '');
        }
        else {
            $('#comment').hide();
            $('#comment').removeAttr('required');
        }

        if ($(this).val() == "morningMedicine") {
            $('#morningMedicine').show();
            $('#morningMedicine').attr('required', '');
        }
        else {
            $('#morningMedicine').hide();
            $('#morningMedicine').removeAttr('required');
        }

        if ($(this).val() == "afternoonMedicine") {
            $('#afternoonMedicine').show();
            $('#afternoonMedicine').attr('required', '');
        }
        else {
            $('#afternoonMedicine').hide();
            $('#afternoonMedicine').removeAttr('required');
        }

        if ($(this).val() == "eveningMedicine") {
            $('#eveningMedicine').show();
            $('#eveningMedicine').attr('required', '');
        }
        else {
            $('#eveningMedicine').hide();
            $('#eveningMedicine').removeAttr('required');
        }
}