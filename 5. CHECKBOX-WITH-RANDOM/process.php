<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
?>
    <div class="card">
        <div class="card-body">
            <?php  if (isset($_POST['html'])) {   
                $color = $colors[array_rand($colors)];    
                echo   '<button type="button" class="btn btn-' .$color . '"> '.$_POST['html'].' </button>';
              } ?>

            <?php  if (isset($_POST['css'])) {   
                $color = $colors[array_rand($colors)];    
                echo   '<button type="button" class="btn btn-' .$color . '"> '.$_POST['css'].' </button>';
              } ?>

            <?php  if (isset($_POST['js'])) {   
                $color = $colors[array_rand($colors)];    
                echo   '<button type="button" class="btn btn-' .$color . '"> '.$_POST['js'].' </button>';
              } ?>
              
            <?php  if (isset($_POST['php'])) {   
                $color = $colors[array_rand($colors)];    
                echo   '<button type="button" class="btn btn-' .$color . '"> '.$_POST['php'].' </button>';
              } ?>  
        </div>
    </div>
<?php require_once 'templates/footer.php' ?>