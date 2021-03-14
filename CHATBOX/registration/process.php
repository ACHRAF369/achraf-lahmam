<?php 
require_once('config.php');
 if (isset($_POST['create'])) {
            $firstname  = $_POST['firstname'];
            $lastname   = $_POST['lastname'];
            $email      = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password   = $_POST['password'];
            $query = "INSERT INTO  log_in (FIRSTNAME, LASTNAME,EMAIL, PHONENUMBER, PASS_WORD) VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$password')";
            $result = mysqli_query($link, $query);
            header('location:registration.php');
            if ($result) {
                echo 'Successfully saved.';
            } else {
                echo 'Ther were erros while saving the data';
            }
        }else{
            echo 'No data';
        }