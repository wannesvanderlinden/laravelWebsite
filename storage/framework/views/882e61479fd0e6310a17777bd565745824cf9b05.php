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
Email:<textarea name="email" id="email" cols="30" rows="1"></textarea>
<br>
Password: <input type="password" name="password" id="password">
<br>
Name:<textarea name="name" id="name" cols="30" rows="1"></textarea>
<br>
<?php echo csrf_field(); ?>
<button type="submit">send</button>
    </form>

</body>
</html><?php /**PATH C:\xampp\htdocs\werkcollege4\resources\views/regristation.blade.php ENDPATH**/ ?>