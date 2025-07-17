<?php
 require '../db/db.php';

  $now = new DateTime();
  $date = $now->format("Y-m-d H:i:s");
  $errors = [];
  $success = [];
  if(isset($_POST['add-category'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    if(empty($name)){
        $errors['name'] = "Name is required";
    }
    //check unique name
    $sql = "SELECT * FROM categories WHERE name =:name";
    $stmt = $conn->prepare($sql);
    $stmt ->bindParam(':name',$name);
    $stmt->execute();
    $catName = $stmt->fetch(mode: PDO::FETCH_OBJ);
    if($catName){
        $errors['name']="Category already exists";
    }
    if(empty($description)){
        $errors['description'] = "Description is required";
    }
    if(empty($errors)){
        $sql = "INSERT INTO categories(name,description,created_at) Values(
        :name,:description,:created_at)";
        $stmt = $conn -> prepare($sql);
        $stmt->bindParam(':name',$name);
        $stmt ->bindParam(':description',$description);
        $stmt->bindParam(':created_at',$date);
        $res = $stmt->execute();
        if($res){
            $success['success']="Category added successfully";

        }else{
            $errors['inset_error'] = "Failed to add category";
        }
    }else {
        $errors['insert_error'] = "Failed to add category";

    }
  }
 ?>
<?php require "../partials/header.php" ?>
<form action="" method="post" class="w-50 mx-auto mt-5 shadow p-4">
    <h2 class="text-center">Add Category</h2>
    <?php require_once "../errors.php";?>
    <?php require_once "../success.php";?>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Category Description</label>
                <input type="text" name="description" class="form-control" />
            </div>
            <input type="submit" name="add-category" value="Add category" class="btn btn-primary">
        </div>

    </div>


</form>
<?php require "../partials/footer.php" ?>