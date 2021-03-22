
<!DOCTYPE html>
<html>
<link rel="stylesheet" href ="<?php echo BASE; ?>../CSS/style.css">
<head>

    <div class="topnav" height="50px">
        <input type="text" placeholder="Search">
        <a class="active" href="<?php echo BASE; ?>/index.php">Home</a>
        <?php if(isLoggedIn()){
        echo '<a href="'.BASE.'/app/views/logout.php">Logout</a>';
        }
        else
        {
          echo '<a href="'.BASE.'/app/views/login.php">Login</a>';
        }
        ?>

       
        <a href=" <?php echo BASE; ?>/app/views/basket.php">Checkout</a>

        <?php if(isAdminLoggedIn()){
           echo '<a href="'.BASE.'/app/views/admin.php">Admin</a>';
        }
        ?>

        <a href=" <?php echo BASE; ?>/app/views/products.php">Basket</a>
    </div>
</head>