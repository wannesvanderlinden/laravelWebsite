<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
Title: <textarea name="title" id="" cols="30" rows="1"></textarea>
<br>
message: <textarea name="message" id="" cols="30" rows="10"></textarea>
<br>
Name: <textarea name="name" id="" cols="30" rows="1"></textarea>
<br>
<?php echo csrf_field(); ?>
<button type="submit">send</button>
    </form>

</body>
</html><?php /**PATH C:\xampp\htdocs\werkcollege4\resources\views/blogCreator.blade.php ENDPATH**/ ?>