<?php
include "../../SessionHelper.php";
include "../../config.php";
$host = "localhost";
$username = "root";
$password = "";
$database = "login";
$message = "";





if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    try {
        $connect = new PDO("mysql:host=$host;dbname=$database", $username,  $password);

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($_POST["login"])) {
            $query = "SELECT * FROM users WHERE username = :username AND
         password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username'  =>  $_POST["username"],
                    'password'  =>  $_POST["password"]
                )

            );

            $count = $statement->rowCount();
            if ($count > 0) {
                $userName =  $_POST["username"];
                $_SESSION["username"] = $userName;
                header("location: ../../index.php");
            } else {
                $message = '<label>Wrong Data</label>';
            }
            if (isset($_POST["cancel"])) {
                header("location: ../../index.php");
            }
        }
    } catch (PDOException $error) {
        $message = $error->getMessage();
    }
}

include "../../Includes/head.php";
?>
<link rel="stylesheet" href="../../CSS/style.css">
<form action="login.php" method="POST" name="login">
    <div class="layout">
        <div class="imgcontainer">
            <img src="../../IMG/loginavatar.jpeg" alt="Avatar" class="avatar">
        </div>

        <div class="container">

            <?php
            if (isset($message)) {
                echo '<label class="text-danger">' . $message . '</label>';
            }
            ?>



            </br>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required />
            </br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required />
            </br>
            <button type="submit" name="login" value="Login">Login</button>
            </br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="containerBottom">
            <span class="psw">Register <a href="registration.php">here</a></span>
            <button type="button" id="cancelbtn" class="cancelbtn" onclick='cancelBtn()'>Cancel</button>
            <hr>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById("cancelbtn").onclick = function() {
            location.href = "../../index.php";
        };
    </script>

</form>

</html>