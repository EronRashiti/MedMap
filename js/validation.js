// Valido Emrin
function validate_name(x){
    var match = /[A-Za-z -']$/;
    
    if( match.test(document.getElementById(x).value)) {
        document.getElementById(x).style.border ='2px solid #ccc';
        document.getElementById(x + 'Error').style.display = "none";
        return true;
    } else {
        document.getElementById(x).style.border ='2px solid #e35152';
        document.getElementById(x + 'Error').style.display = "block";
        return false; 
    }
}

// Valido email adresen
function validate_email(email) { 
    var match = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if(match.test(email)){
        document.getElementById('email').style.border ='2px solid #ccc';
        document.getElementById('emailError').style.display = "none";
        return true;
    } else {
        document.getElementById('email').style.border ='2px solid #e35152';
        return false;
    }
} 

// Valido Mesazhin
function validate_subject(message){
    if (document.getElementById("message").value == ""){
        document.getElementById('message').style.border ='2px solid #e35152';
        return false;
    }
    else {
        document.getElementById('message').style.border ='2px solid #ccc';
        document.getElementById('messageError').style.display = "none";
        return true;
    }
}

function validateForm(){
    var error = 0;

        // Valido Emrin
        if(!validate_name('name')) {
            document.getElementById('nameError').style.display = "block";
            error++;
        }
        
        // Valido Email Addresen
        if(!validate_email(document.getElementById('email').value)) {
            document.getElementById('emailError').style.display = "block";
            error++;
        }

        // Valido Mesazhin
        if(!validate_message()) {
            document.getElementById('messageError').style.display = "block";
            error++;
        }

    if(error > 0) {
        return false;
    }
}