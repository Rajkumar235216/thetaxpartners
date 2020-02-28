//   for contact form details


const name1 = document.getElementById("name")
const email1 = document.getElementById("email")
const subject1 = document.getElementById("subject")
const message1 = document.getElementById("message")
const form1 = document.getElementById("form1")
const err1 = document.getElementById("nameerr")
const err2 = document.getElementById("emailerr")
const err3 = document.getElementById("subjecterr")
const err4 = document.getElementById("txtareaerr")

var uname = document.form1.name;
var uemail = document.form1.email;
var usubject = document.form1.subject;
var utextarea = document.form1.message;





// form validation on submit 

form1.addEventListener('submit',(e)=>{
    
        if ( name1.value == "" || name1.value == null || name1.value.length <= 4 || name1.value.length >= 40){
            e.preventDefault()
        err1.innerText="Please Enter your name";
        }
        if (email1.value == "" || email1.value == null || !ValidateEmail(email1.value)) {
            e.preventDefault()
            err2.innerText = "Please enter valid email";
        }
        if (subject1.value == "" || subject1.value == null || subject1.value.length <= 10 ||subject1.value.length >=80) {
            e.preventDefault()
            err3.innerText = "Please give it a subject";
        }
        if (message1.value == "" || message1.value == null || message1.value.length <= 20 || message1.value.length >= 400) {
            e.preventDefault()
            err4.innerText = "Please describe your message in detail";
        }

});

// Real time ---contact form--- validation begins here
function checkName(){
    if (uname.value.length == "" || uname.value.length == null)
    {
        err1.innerHTML="Please Enter Your Name";
    }
    if(uname.value.length <4)
    {
        err1.innerHTML = "Name must be greater than 4 characters";

    }
    else if ((uname.value.length) >= 4 && (uname.value.length < 40)) {
        err1.innerHTML = "";

    }
    if (uname.value.length >= 40) {
        err1.innerHTML ="Name must be less than 40 characters";

    }
 

}

function checkEmail() {
    if (uemail.value.length == "" || uemail.value.length == null) {
        err2.innerHTML = "Please Enter Your Email";
    }
    if (!ValidateEmail(uemail.value)) {
        err2.innerHTML = "Please Enter a valid Email";

    }
    if (ValidateEmail(uemail.value)) {
        err2.innerHTML = "";
    }
    if (uemail.value.length >= 100) {
        err2.innerHTML = "Email must be less than 100 characters";

    }


}
function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.match(mailformat)) {
        return true;
    } else {
        return false;
    }
}

function checkSubject() {
    if (usubject.value.length == "" || usubject.value.length == null) {
        err3.innerHTML = "Please Enter Your Subject";
    }
    if (usubject.value.length < 10) {
        err3.innerHTML = "Subject must be greater than 10 characters";

    }
    else if ((usubject.value.length) >= 10 && (usubject.value.length < 80)) {
        err3.innerHTML = "";

    }
    if (usubject.value.length >= 80) {
        err3.innerHTML = "Subject must be less than 80 characters";

    }
 

}

function checkText() {
    if (utextarea.value.length == "" || utextarea.value.length == null) {
        err4.innerHTML = "Please Describe your Message in detail";
    }
    if (utextarea.value.length < 20) {
        err4.innerHTML = " Message must be greater than 20 characters";

    }
    else if ((utextarea.value.length) >= 20 && (utextarea.value.length < 400)) {
            err4.innerHTML = "";

    }
    if (utextarea.value.length >= 400) {
        err4.innerHTML = "Message must be less than 400 characters";

    }


}



