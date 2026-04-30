console.log("connected");
var wrongcount = 0;
function validateForm(){
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    console.log(email);
    console.log(password);
    if (!email.includes("@")){
        document.getElementById("emailErr").innerHTML = "Email is required ";
        wrongcount++;
    } else {
         document.getElementById("emailErr").innerHTML = "";
    }
    if(password.length < 6){
         document.getElementById("passwordErr").innerHTML = "Password is required";
         wrongcount++;
    }
    else if(!password.includes("#")){
         document.getElementById("passwordErr").innerHTML = "password is required 6 letters";
         wrongcount++;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
     document.getElementById("count").innerHTML = wrongcount;
     console.log("Wrong Attempts:", wrongcount);
     return false;

}