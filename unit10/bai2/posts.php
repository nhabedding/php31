<?php 
require_once('connection.php');

$sql = "SELECT * FROM posts";

$results =$conn->query($sql);

$posts = array();
while($row = $results->fetch_assoc()) {
    $posts[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="posts_add.php" class="btn btn-primary">Add New POST</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>description</th>
                <th>Thumbnail</th>
                <th>content</th>
                <th>slug</th>
                <th>view_count</th>
                <th>category_id</th>
                <th>create_at</th>
                <th>Action</th>
            </thead>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td><?= $post['id'] ?></td>
                    <td><?= $post['title'] ?></td>
                    <td><?= $post['description'] ?></td>
                    <td>
                        <img src="./image/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $post['content'] ?></td>
                    <td><?= $post['slug'] ?></td>
                    <td><?= $post['view_count'] ?></td>
                    <td><?= $post['category_id'] ?></td>
                    <td><?= $post['create_at'] ?></td>

                    <td>
                        <a href="posts_detail.php?id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="posts_edit.php?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="posts_delete.php?id=<?= $post['id'] ?>#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>