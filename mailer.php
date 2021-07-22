<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    if(empty($name) ||empty($email) || empty($subject) ||empty($message)){
        $error_msg="All fields are required";
    }else{
        $success_msg="Form submitted successfully";
    }
}

?>