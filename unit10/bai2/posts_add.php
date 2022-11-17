<?php 
require_once('connection.php');

$categories = mysqli_query($conn,"SELECT * FROM categories");
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
        <h3 align="center">Add New Post</h3>
        <hr>
        <form action="posts_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content">
            </div>

            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">view_count</label>
                <input type="number" class="form-control" id="" placeholder="" name="view_count">
            </div>

            <div class="form-group">
                <label for="">category_id</label>
                <select name="category_id" >
                    <option value="">ten danh muc cha</option>
                    <?php foreach ($categories as $cate) {   ?>
                        <option   value="<?=  $cate['id']; ?>"><?=  $cate['id'] ?></option>
                    <?php } ?>
                </select>
                <!-- <input type="number" class="form-control" id="" placeholder="" name="category_id"> -->
            </div>
            <div class="form-group">
                <label for="">create_at</label>
                <input type="datetime-local" class="form-control" id="" placeholder="" name="create_at">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>