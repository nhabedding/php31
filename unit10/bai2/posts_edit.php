<?php 

require_once('connection.php');
$id =(isset($_GET['id'])?$_GET['id']:0);
$sql = 'select *from posts where id = ' .$id;

$post = $conn->query($sql)->fetch_assoc();
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
        <h3 align="center">Update New Posts</h3>
        <hr>
        <form action="posts_edit_process.php?id=<?= $post['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input type="hidden"name ="id" value="<?= $post['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $post['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $post['content'] ?>">
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $post['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">view_count</label>
                <input type="number" class="form-control" id="" placeholder="" name="view_count" value="<?= $post['view_count'] ?>">
            </div>
        
            <div class="form-group">
                <label for="">category_id</label>
                <select name="category_id" >
                    <option value="<?= $post['category_id'] ?>"><?= $post['category_id'] ?></option>
                     <?php foreach ($categories as $cate) {   ?>
                        <option   value="<?=  $cate['id']; ?>"><?=  $cate['id'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">create_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="create_at" value="<?= $post['create_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>