<?php
require_once('registerHandler.php');
?>
<?php
    if(isset($_POST) && ($_POST) !== ""){
        $email =    $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "INSERT INTO users(email, username, password) VALUES(?,?,?)";
        $statement = $db->prepare($query);
        $result = $statement->execute([$email, $username, $password]);

        if($result)
        {
            echo 'Credentials successfully saved. You can now log into your account.';
        }
        else {
            echo 'There were problems while attempting to store the data';
        }
    }
    else{
        echo 'No data';
    }
?>
