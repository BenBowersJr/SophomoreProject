$("#filterBy").change(hideOthers).change();//run this code once when the page loads

$("#filterBy").change(function() {//every time a new option is selected...
   hideOthers();
});

function hideOthers(){//give the user the correct field to fill out based on their selection in the filter by dropdown
    if ($(this).val() == "patientID") {
            $('#patientID').show();
            $('#patientID').attr('required', '');
        }
        else {
            $('#patientID').hide();
            $('#patientID').removeAttr('required');
        }

        if ($(this).val() == "patientName") {
            $('#patientName').show();
            $('#patientName').attr('required', '');
        }
        else {
            $('#patientName').hide();
            $('#patientName').removeAttr('required');
        }

        if ($(this).val() == "age") {
            $('#age').show();
            $('#age').attr('required', '');
        }
        else {
            $('#age').hide();
            $('#age').removeAttr('required');
        }

        if ($(this).val() == "emergencyNumber") {
            $('#emergencyNumber').show();
            $('#emergencyNumber').attr('required', '');
        }
        else {
            $('#emergencyNumber').hide();
            $('#emergencyNumber').removeAttr('required');
        }

        if ($(this).val() == "emergencyName") {
            $('#emergencyName').show();
            $('#emergencyName').attr('required', '');
        }
        else {
            $('#emergencyName').hide();
            $('#emergencyName').removeAttr('required');
        }

        if ($(this).val() == "admissionDate") {
            $('#admissionDate').show();
            $('#admissionDate').attr('required', '');
        }
        else {
            $('#admissionDate').hide();
            $('#admissionDate').removeAttr('required');
        }
}