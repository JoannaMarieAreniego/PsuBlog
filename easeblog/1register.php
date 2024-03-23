<!-- 1register.php -->
<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-3.3.1.js?ver=002"></script>
    <script src="js/1register.js?ver=005"></script>
</head>
<body>
<h2>Registration Form</h2>

<form id="registrationForm" onsubmit="return addUser();">
    First Name: <input type="text" id="firstname" name="firstname" onfocusout="validateUserForm();"><br>
    <span id="firstname_error"></span><br>

    Last Name: <input type="text" id="lastname" name="lastname" onfocusout="validateUserForm();"><br>
    <span id="lastname_error"></span><br>

    Student ID: <input type="text" id="studID" name="studID" onfocusout="validateUserForm();"><br>
    <span id="studID_error"></span><br>

    Username: <input type="text" id="username" name="username" onfocusout="validateUserForm();"><br>
    <span id="username_error"></span><br>

    Password: <input type="password" id="password" name="password" onfocusout="validateUserForm();"><br>
    <span id="password_error"></span><br>

    Confirm Password: <input type="password" id="confirmpass" name="confirmpass" onfocusout="validateUserForm();"><br>
    <span id="confirmpass_error"></span><br>
    <button type="submit" name="registerButton" id="registerButton">Register</button>
    <button type="button" name="gotologinButton" id="gotologinButton" onclick="goToLoginPage()">Login</button>
</form>

<script>
    function goToLoginPage() {
        window.location.href = "2login.php";
    }
</script>
<?php include ("footer.php"); ?>