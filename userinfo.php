<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
  <body>
    <div class=user-info-page>
        <h2 style="font-family: Times New Roman; text-transform:uppercase;">You have successfully registered on our <br> Online Coaching Institute</h2>
        <br>
        <h3 style="text-decoration-line:none;">You are most welcome to Chandigarh's Best  online coaching Institute.</h3>
        <br>
       
    </div>
    
    <div class="User-info" target="_blank">
    <h4>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "Registration");
        //Check connection
        if($conn == false) die("Error: Oops! Could not connect to the User Database.".mysqli_connect_error());

        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $age=$_REQUEST['age'];
        $quali=$_REQUEST['quali'];
        $course=$_REQUEST['course'];
        $pnum=$_REQUEST['pnum'];
        $email=$_REQUEST['email'];
        $gender=$_REQUEST['gender'];

        $sql= "INSERT INTO `User Details` (`First Name`, `Last Name`, `Age`, `Qualification`, `Course Opted`, `Phone Number`, `Email`, `Gender`) VALUES ('$fname', '$lname', '$age', '$quali', '$course', '$pnum', '$email', '$gender')";

        if(mysqli_query($conn, $sql)) {

          echo '<h3> You have successfully submitted and your registration details are mentioned below:<br><br></h3>';
          echo "<h3> First Name - $fname <br> Last Name - $lname <br> Age-$age <br> Qualification-$quali <br> Course - $course <br> Phone Number- $pnum <br> email-$email <br> Gender-$gender </h3>";
        }      
        else {
          echo "Error! $sql." .mysqli_error($conn);
        }
        ?>
        </h4>
        </div>
    </body>
</html>

