<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    if (empty($name)) {
        echo 'thang ml';

    }else{
        echo "$name OK";
    }
}
?>
</body>
</html>
