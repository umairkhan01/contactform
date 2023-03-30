<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form Details</title>
  </head>
  <body>
    <h2>Contact Form Details</h2>
    <?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $gender = $_POST['gender'];
      $country = $_POST['country'];

      echo "<p><strong>Name:</strong> $name</p>";
      echo "<p><strong>Email:</strong> $email</p>";
      echo "<p><strong>Message:</strong> $message</p>";
      echo "<p><strong>Gender:</strong> $gender</p>";
      echo "<p><strong>Country:</strong> $country</p>";
    ?>
  </body>
</html>
