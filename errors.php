<?php 
if(isset($errors) && !empty($errors)){
    foreach($errors as $error){
        echo "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
  <strong>$error</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
}

?>