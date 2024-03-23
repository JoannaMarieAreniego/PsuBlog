<!-- 2login.php -->
<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-3.3.1.js?ver=002"></script>
    <script src="js/2login.js?ver=005"></script>
</head>
<body>

<h2>Login Form</h2>

<form id="loginForm" onsubmit="return loginUser();">
    Student ID: <input type="text" id="studID" name="studID" onfocusout="validateLoginForm();"><br>
    <span id="lstudID_error"></span><br>

    Password: <input type="password" id="password" name="password" onfocusout="validateLoginForm();"><br>
    <span id="lpassword_error"></span><br>

    <button type="submit" name="loginButton" id="loginButton">Login</button>
</form>

<?php include("footer.php"); ?>