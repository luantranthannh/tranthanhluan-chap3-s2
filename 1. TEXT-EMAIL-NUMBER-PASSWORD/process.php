<?php // HEADER 
 require_once "templates/header.php";
?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $name = $_POST['name'];
     $number =  $_POST['number'];
     $email = $_POST['email'];
      $password = $_POST['password'];
      $message = $_POST['message'];

  }
?>
<ul class="list-group">
    <li class="list-group-item"><?php  echo $name;  ?></li>
    <li class="list-group-item"><?php echo  $number;  ?></li>
    <li class="list-group-item"><?php echo $email ; ?></li>
    <li class="list-group-item"><?php echo $password ; ?></li>
    <li class="list-group-item"><?php echo $message; ?></li>

</ul>
<?php // FOOTER 
require_once "templates/footer.php";
?>