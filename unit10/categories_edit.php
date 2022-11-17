<?php 

require_once('connection.php');
$id =(isset($_GET['id'])?$_GET['id']:0);
$sql = 'select *from categories where id = ' .$id;

$category = $conn->query($sql)->fetch_assoc();

echo "<pre>";
print_r($category);
echo "</pre>";



 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">zent - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="categories_edit_process.php?id=<?= $category['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden"name ="id" value="<?= $category['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['name'] ?>">
            </div>
             <div class="form-group">
                <label for="">parent_id</label>
               
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" 
                value="<?= $category['parent_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail"
                 value="<?= $category['thumbnail'] ?>">
            </div>
          <div class="form-group">
                <label for="">slug</label>
               
                <input type="text" class="form-control" id="" placeholder="" name="slug" 
                value="<?= $category['slug'] ?>">
            </div>
              <div class="form-group">
                <label for="">description</label>
               
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'] ?>">
            </div>
               <div class="form-group">
                <label for="">Created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?= $category['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>