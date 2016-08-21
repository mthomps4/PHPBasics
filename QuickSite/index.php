<?php
  $title = "PHP BASICS";
?>

<!doctype html>
<html>
<head>
<title> <?php echo $title ?> </title>
</head>
<body>

<h1> <?php echo $title ?> </h1>

<p> <?php include "../hello.php"; ?> <p>

<h3> Today is <?php echo date("F d, Y"); ?> </h3>


<footer>
  	 <p> &copy; <?php echo date("Y"); ?> Matthew Thompson </p>
</footer>

</body>
</html>
