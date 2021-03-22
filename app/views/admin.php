<?php
include "../../config.php";
include "../../SessionHelper.php";
include "../../Includes/head.php";

?>

<link rel="stylesheet" href="../../Css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body>


  <?php


  if (isset($_SESSION['message'])) : ?>

    <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>





  <center>
    <h2>Table with all the employees working in AK Supplements</h2>
    <center>
      <p>Additional info</p>



      <br>


      <?php $mysqli = new mysqli('localhost', 'root', '', 'login') or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT * FROM employee") or die($mysqli->error);

      ?>

      <table style="width:100%">
        <tr>
          <th>NAME</th>
          <th>EMAIL</th>
          <th colspan="2">Action</th>

        </tr>

        <?php
        while ($row = $result->fetch_assoc()) : ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <a href="admin.php?edit=<?php echo $row['id']; ?>" class="btn">Edit</a>
              <a href="../models/process.php?delete=<?php echo $row['id']; ?>" class="btn">Delete</a>

            </td>
          <?php endwhile; ?>

      </table>


      <br>

      <?php
      function pre_r($array)
      {
        echo '<pre>';
        print_r($array);
        echo '<pre>';
      }
      ?>

      <?php require_once '../models/process.php'; ?>


      <form method="POST" action="../models/process.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group">
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
          <?php
          if ($update == true) :
          ?>
            <button type="submit" name="update" class="btn">Update</button>
          <?php else : ?>
            <button type="submit" name="save" class="btn">Save</button>
          <?php endif; ?>
        </div>


      </form>

</body>

</html>