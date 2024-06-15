const { isSet } = require("lodash");

function passval(){
    let password = document.getElementById('pass').value;
    let con_pass = document.getElementById('con_pass').value;
   if(password == con_pass){
    document.getElementById('pass_error').innerHTML="";
    document.getElementById('submit').disabled = false;
    
   }
   else{
    document.getElementById('pass_error').innerHTML="Password not Matched !!";
    document.getElementById('submit').disabled = true;
    
   }

                let capRegex = /[A-Z]/g;
                let smallRegex = /[a-z]/g;
                let speRegex = /[!@#$%&*]/g;
                let numRegex = /[0-9]/g;
                
    if(capRegex.test(password) && smallRegex.test(password) && speRegex.test(password) && numRegex.test(password) && (password.length>=8)) {
        document.getElementById('reg_error').innerHTML="";
        document.getElementById('submit').disabled = false;
        
    }else{
        document.getElementById('reg_error').innerHTML="Password must be eight characters including one uppercase letter, one special character and alphanumeric characters";
        document.getElementById('submit').disabled = true;
       
    }       
}
