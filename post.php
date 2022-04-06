<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post a book file</title>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'GET'){ ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title"><br>
            <input type="text" name="author" placeholder="Author"><br>
            <input type="file" name="content"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php
    }elseif(is_uploaded_file($_FILES['content']['tmp_name'])) {
        $author = $_POST['author'];
        $title = $_POST['title'];
        $destination ="./books/".$author;
        if (!file_exists($destination))
            mkdir($destination);
        $destination .= "/$title.txt";
       $result = move_uploaded_file($_FILES['content']['tmp_name'],$destination);
        echo  $result ?  "file uploaded" :  "error";
    } ?>
</body>
</html>