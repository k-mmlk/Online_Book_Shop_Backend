<?php 
if(isset($success) && !empty($success)){
    foreach($success as $res){
        echo "<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>
  <strong>$res</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
}

?>