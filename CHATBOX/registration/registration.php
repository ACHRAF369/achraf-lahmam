<?php
require_once('config.php');

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
       
        ?>
    </div>
    <div class="f_container">
        <form action="registration.php" method="POST" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <P>Fill up the form with correct values.</P>
                        <label> <b>First Name</b></label>
                        <input type="text" name="firstname" required class="form-control">
                        <label> <b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" required>
                        <label> <b>Email Address</b></label>
                        <input class="form-control" type="email" name="email"  required>
                        <label><b> Phone Number</b></label>
                        <input class="form-control" type="integer" name="phonenumber" required>
                        <label><b>Password</b></label>
                        <input class="form-control" type="password" name="password" required>
                        <input type="submit" name="create" value="sign up">
                    </div>
                </div>
        </form>
    </div>
</body>

</html>