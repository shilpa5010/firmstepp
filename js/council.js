function formvalidation()
{
    if($("#type").val()== 0) {   
       alert("Please select Type");
       $("#type").focus();
       return false;
    }
    if($("#type").val()=="Citizen") {
    if($("#first_name").val()== "") {   
       alert("Please enter First Name");
       $("#first_name").focus();
       return false;
    }
    
    if($("#last_name").val() == "") {   
       alert("Please enter Last Name");
       $("#last_name").focus();
       return false;
    }
    }
    if($("#service").val() == 0) {   
       alert("Please enter Service");
       $("#service").focus();
       return false;
    }
return true;
}