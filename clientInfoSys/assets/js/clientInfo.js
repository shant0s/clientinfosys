function checkField() {
    if (document.getElementById('fullname').value == '') {
        document.getElementById('fname').innerHTML = "Name is required!!";
        return false;
    } 
    
    if(document.getElementById('address').value == ''){
        document.getElementById('c_address').innerHTML = "Address is required!!";
        return false;
    }
    
    if(document.getElementById('contact').value == ''){
        document.getElementById('contact_mode').innerHTML = "Select one of the contact type!!";
        return false;
    }
    
    if(document.getElementById('nationality').value == ''){
        document.getElementById('nationality_required').innerHTML = "Nationality is required!!";
        return false;
    }
    
    if(document.getElementById('dob').value == ''){
        document.getElementById('date_birth').innerHTML = "Date is required!!";
        return false;
    }
    
    if(document.getElementById('education').value == ''){
        document.getElementById('edu_back').innerHTML = "Education is required!!";
        return false;
    }
    
}

 function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode != 46 && charCode > 31
                        && (charCode < 48 || charCode > 57))
                    return false;

                return true;
            }

function showField(contactType) {
    if (contactType == "Email") {
        document.getElementById('contact_mode').innerHTML = 'Email: <input type="email" name="email" id="email" placeholder="abc@xyz.com" required="required" />';
        document.getElementById('contact').value = document.getElementById('email').value;
    } else if (contactType == "Phone") {
        document.getElementById('contact_mode').innerHTML = 'Phone: <input type="text" name="phone" maxlength=10 id="phone" required="required" onkeypress="return isNumberKey(event)" />';
        document.getElementById('contact').value = document.getElementById('phone').value;
    } else {
        document.getElementById('contact_mode').innerHTML = '';
    }
}