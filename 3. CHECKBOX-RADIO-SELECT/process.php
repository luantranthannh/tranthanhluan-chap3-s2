<?php  require_once "templates/header.php";
  ?>
<?php
    // if ($_SERVER["REQUEST_METHOD"=="POST"]){
    //     $province = $_POST['province'];
        
       
    // }
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3">
                <?php  if (isset($_POST['province'])) {    echo $_POST['province']; } ?>
            </h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
          
            <?php

              if (isset($_POST['gender'])=="Female"){
                    echo '<img src="images/female.png" alt="Female" width="100px";>';
              }

              else{
                    echo '<img src="images/male.png" alt="Male" width="100px"; >';
              }
            
            ?>
            <!-- YOUR CODE HERE [gender] -->
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">

        <?php if (isset($_POST['html'])){ ?>
            <button class="btn btn-primary" ><?php echo $_POST['html']; ?></button>
        <?php }; ?>

        <?php if (isset($_POST['css'])){ ?>
            <button class="btn btn-primary" ><?php echo $_POST['css']; ?></button>
        <?php }; ?>

        <?php if (isset($_POST['js'])){ ?>
            <button class="btn btn-primary" ><?php echo $_POST['js']; ?></button>
        <?php }; ?>

        <?php if (isset($_POST['php'])){ ?>
            <button class="btn btn-primary" ><?php echo $_POST['php']; ?></button>
        <?php }; ?>
    </div>
    </div>

<?php // FOOTER

 require_once "templates/footer.php";

?>
