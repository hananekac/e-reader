<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file via PUT Method</title>
</head>
<body>
<form>
    <input type="text" name="title" id="title" placeholder="Title"><br>
    <input type="text" name="author" id="author" placeholder="Author"><br>
    <input type="file" name="content" id="content"><br>
    <input type="submit" name="submit" value="Submit">
</form>
<script>
    const form = document.querySelector('form');
    form.addEventListener('submit', ev => {
        ev.preventDefault();
        title = document.getElementById('title').value;
        author = document.getElementById('author').value;
        fetch(`putHandler.php?title=${title}&author=${author}`, {
                method:'put',
                body: document.getElementById('content').files[0]
        });
    });
</script>
</body>
</html>