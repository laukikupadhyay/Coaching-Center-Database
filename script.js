//FORM VALIDATION JAVASCRIPT

function clearErrors(){
        errors = document.getElementsByClassName('form-error');
        for(let item of errors)
        {
            item.innerHTML = "";
        }
}

function seterror(id, error)
{
//sets error inside tag of id
    element = document.getElementById(id);
    element.getElementsByClassName('form-error')[0].innerHTML = error; 
}

function validateform(){
    var returnval = true;
    var num = /^[0-9]+$/;
 

    //perform validation and if validation fails, set the value of returnval to false
    var Fname = document.forms['myForm']["fname"].value;
    if(Fname.length<5){
        seterror("Fname", "*Length of First Name is too short");
        returnval = false;
    }

        if(Fname.length==0){
            seterror("Fname", "*First Name cannot be empty");
            returnval = false;
         }

            if(Fname.length==num){
                seterror("Fname", "*First Name cannot be an integer");
                returnval = false;
             }

             
    var Lname = document.forms['myForm']["lname"].value;
    if(Lname.length<5){
        seterror("Lname", "*Length of First Name is too short");
        returnval = false;
    }

        if(Lname.length==0){
        seterror("Lname", "*First Name cannot be empty");
        returnval = false;
        }

            if(Lname.length==num){
              seterror("Lname", "*First Name cannot be an integer");
              returnval = false;
             }


    var Age = document.forms['myForm']["age"].value;
    if(Age<=12){
        seterror("Age", "*You are not eligible for the course");
        returnval = false;
    }

          if(Age>=60){
           seterror("Age", "*You are not eligible for the course");
           returnval = false;
         }

                if(Age==0){
                  seterror("Age", "*Age cannot be zero");
                  returnval = false;
                 }
                 
    var Quali = document.forms['myForm']["quali"].value;
     if(Quali=="Select Qualification")
    {  
        seterror("Quali", "*Select your Qualification");
        returnval = false;
    }

                   
    var Course = document.forms['myForm']["course"].value;
     if(Course=="Select Course")
    {  
        seterror("Course", "*Select your preferred Course");
        returnval = false;
    }


    var Phone = document.forms['myForm']["pnum"].value;
    if(Phone.length<10){
     seterror("Phone", "*Phone Number should be of 10 digits");
     returnval = false;
    }
         

    var Email = document.forms['myForm']["email"].value;
    if(Email.length<10){
        seterror("Email", "*Length of email is too short");
        returnval = false;
    }

 
return returnval;
}

















