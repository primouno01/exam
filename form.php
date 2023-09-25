<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css">

  	<link rel="stylesheet" href="assets/css/styles.css">
    </head>
  <style>
        .error {color: #FF0000;}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
   <script type="text/javascript">
    $(document).ready(function() {
        var age = "";
        $('#dob').datepicker({
            yearRange: "-100:+0",
            dateFormat: "yy-mm-dd",
            onSelect: function(value, ui) {
                var today = new Date();
                age = today.getFullYear() - ui.selectedYear;
                $('#age').val(age);
            },
            changeMonth: true,
            changeYear: true
        })
    })
</script>
<body>
   <?php

        $nameErr = $emailErr = $genderErr = $doberr= $phonenumberErr = "";

        $name = $email = $gender = $dob = $phonenumber = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {

            $nameErr = "Please enter a valid name";

        } else {

            $name = test_input($_POST["name"]);

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

            $nameErr = "Only letters and white space allowed";

            }

        }

        if (empty($_POST["email"])) {

            $emailErr = "valid Email address";

        } else {

            $email = test_input($_POST["email"]);



            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "The email address is incorrect";

            }

        }  

        if (empty($_POST["phonenumber"])) {

            $phonenumber = "";
          

        } else {

            $phonenumber = test_input($_POST["phonenumber"]);


            if (!preg_match("/^(09|\+639)\d{9}$/",$phonenumber)) {
                
                $phonenumberErr = "Please enter a ph number";

            }

        }

        if (empty($_POST["dob"])) {

            $doberr = "Please select DOB";

        } else {

            $dob = test_input($_POST["dob"]);

        }        

        if (empty($_POST["gender"])) {

            $genderErr = "Please select a gender";

        } else {

            $gender = test_input($_POST["gender"]);

        }

        }

        function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

        }

    ?>
	<div class="container">
	    
	    <div class="row">
	    	<div class="col-md-4">
	    		<h3>Add Details</h3>

<p><span class="error">* required field</span></p>
    <form method="post" action="save.php" id="form">  

        FullName: <input type="text" id="name" name="name">

        <span class="error">* <?php echo $nameErr;?></span>

        <br><br>

        E-mail address: <input type="text" id="email" name="email">

        <span class="error">* <?php echo $emailErr;?></span>

        <br><br>

        PhoneNumber: <input type="text" id="phonenumber" name="phonenumber">

        <span class="error">* <?php echo $phonenumberErr;?></span>

        <br><br>

       Enter Date of Birth: <input type="text" id="dob" name="dob" /><br/><br/>
        Age: <input type="text" id="age" name="age" readonly/>
        <span class="error">* <?php echo $doberr;?></span>
        <br><br>

        Gender:
        <select name="gender" id="gender">
            <option value="">Select One</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
            <span class="error">* <?php echo $genderErr;?></span>

        <br><br>

       <button type="button" class="btn btn-primary" id="btnSubmit">Submit</button>

    </form>
	    	</div>

	    	
	    </div>
	</div>

	 
    



	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	
	



</body>
  
</html>