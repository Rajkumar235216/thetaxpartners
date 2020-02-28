


//   for enquiry form details
const name2 = document.getElementById("nametwo")
const email2 = document.getElementById("email2")
const mobile = document.getElementById("mobile")
const servicegrp = document.getElementById("service_grp")
const servicetype = document.getElementById("service_type")
const textarea = document.getElementById("textarea")
const form2 = document.getElementById("form2")
const error1 = document.getElementById("name2err")
const error2 = document.getElementById("email2err")
const error3 = document.getElementById("mobileerr")
const error4 = document.getElementById("servicegrperr")
const error5 = document.getElementById("servicetypeerr")
const error6 = document.getElementById("texterr")

var uname2 = document.form2.nametwo;
var uemail2 = document.form2.email2;
var umobile = document.form2.mobile;
var uservicegrp = document.form2.servicegrp;
var uservicetype = document.form2.servicetype;
var utextarea2 = document.form2.textarea;

 

// form validation on submit 
form2.addEventListener('submit', (e) => {

    if (name2.value == "" || name2.value == null || name2.value.length <= 4 || name2.value.length >= 40) {
        e.preventDefault()
        error1.innerText = "Please Enter your name";
    }
    if (email2.value == "" || email2.value == null || !ValidateEmail(uemail2.value)) {
        e.preventDefault()
        error2.innerText = "Please enter valid email";
    }
    if (mobile.value == "" || mobile.value == null || umobile.value.length > 10 && !isNaN(umobile.value) || mobile.value.length >= 80) {
        e.preventDefault()
        error3.innerText = "Please enter your mobile number";
    }
    
        if (servicegrp.value == "" || servicegrp.value == null ) {
            e.preventDefault()
            error4.innerText = "Please select a service group";
        }

        if (servicetype.value == "" || servicetype.value == null) {
            e.preventDefault()
            error5.innerText = "Please select a service type";
        }

    if (textarea.value == "" || textarea.value == null || textarea.value.length <= 20 || textarea.value.length >= 400) {
        e.preventDefault()
        error6.innerText = "Please describe your query in detail";
    }

});

// Real time ---enquiry form--- validation begins here
function checkName2() {
    if (uname2.value.length == "" || uname2.value.length == null) {
        error1.innerHTML = "Please Enter Your Name";
    }
    if (uname2.value.length < 4) {
        error1.innerHTML = "Name must be greater than 4 characters";

    }
    else if ((uname2.value.length) >= 4 && (uname2.value.length < 40)) {
        error1.innerHTML = "";

    }
    if (uname2.value.length >= 40) {
        error1.innerHTML = "Name must be less than 40 characters";

    }


}

function checkEmail2() {
    if (uemail2.value.length == "" || uemail2.value.length == null) {
        error2.innerHTML = "Please Enter Your Email";
    }
    if (!ValidateEmail(uemail2.value)) {
        error2.innerHTML = "Please Enter a valid Email";

    } 
    if (ValidateEmail(uemail2.value)) {
        error2.innerHTML = "";
    }

    
    if (uemail2.value.length >= 100) {
        error2.innerHTML = "Email must be less than 100 characters";

    }


}
function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.match(mailformat)) {
       return true;
    } 
    else {
       return false;
    }
}


function checkMobile() {
    if (umobile.value.length == "" || umobile.value.length == null) {
        error3.innerHTML = "Please Enter Your mobile number";
    }
    if (isNaN(umobile.value))
    {
       error3.innerHTML = "Only numbers are allowed";
    }
    if (umobile.value.length > 10 && !isNaN(umobile.value)) {
        error3.innerHTML = "Please Enter 10 digit mobile number";

    } 
    if (umobile.value.length <= 10 && !isNaN(umobile.value)) {
        error3.innerHTML = "";

    }



}

function checkServiceGrp() {
    if (uservicegrp.value == "" || uservicegrp.value == null) {
        error4.innerHTML = "Please select one category";
    }
}

function checkServiceType() {
    if (uservicetype.value == "" || uservicetype.value == null) {
        error5.innerHTML = "Please select one category";
    }
    }




function checkText2() {
    if (utextarea2.value.length == "" || utextarea.value.length == null) {
        error6.innerHTML = "Please Describe your Query in detail";
    }
    if (utextarea2.value.length < 10) {
        error6.innerHTML = " Query must be greater than 20 characters";

    } else if ((utextarea2.value.length) >= 10 && (utextarea2.value.length < 400)) {
        error6.innerHTML = "";

    }
    if (utextarea2.value.length >= 400) {
        error6.innerHTML = "Message must be less than 400 characters";

    }


}
