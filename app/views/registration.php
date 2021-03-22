<?php
require_once('registerHandler.php');
include "../../SessionHelper.php";
include "../../config.php";
include "../../Includes/head.php";
?>
<link rel="stylesheet" href="../../CSS/CSSregistration/style.css">
<title>User Registration Form</title>

<body>

<div>
    <form action="registration.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill up the form with the correct information</p>
            <label for="email"><b>Email Address</b></label>
            <input id="email" type="email" placeholder="Enter Email" name="email" required/>
            <br>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required/>
            <br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required/>

            <input type="submit" id="register" name="create" value="Sign Up">
            <p class="form-message"></p>
        </div>
    </form>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
$(function(){
    $('#register').click(function(e){

        var valid = this.form.checkValidity();
        if(valid){

            var email       = $("#email").val();
            var username    = $("#username").val();
            var password    = $("#password").val();

            e.preventDefault();

            $.ajax({
                type: "POST",
                contentType: "application/x-www-form-urlencoded",
                url: "registerProcess.php",
                data: {
                    email: email,
                    username: username,
                    password: password
                    },
            success: function(data){
                Swal.fire({
                    'title': 'Successful',
                    'text': data,
                    'type': 'success'
                })
            },
            error: function(data){
                Swal.fire({
                    'title': 'Failed',
                    'text': 'Issues were encountered during the process of user creation.',
                    'type': 'fail'
                })
            }
            });
        } else{
            echo ('Validation unsuccessful');
        }

    });
})
</script>
</body>

</html>