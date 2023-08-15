<html>

<body>

<?php

echo " <h1>AJAX</h1>";


$name=$_POST['name'];

$roll=$_POST['roll'];
$email=$_POST['email'];
$date=$_POST['date'];
$comment=$_POST['comment'];

echo "<h1 style=color:green>login success </h1>";
echo"<h1>$name</h1>";
echo"<h1>$roll</h1>";
echo"<p>$email</p>";
echo"<p>$date</p>";
echo"<p>$comment</p>";

?>

</body>

</html>