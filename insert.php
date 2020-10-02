<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php

$hostname = "localhost";
$username = "review_site";
$password = "JxSLRkdutW";
$db = "reviews";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>

<table border="1" align="center">
<tr>
  <td>Reviewer Name</td>
  <td>Stars</td>
  <td>Details</td>
  <td>Notes</td>
  <td>Reviewer Quality (will hide)</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "INSERT INTO `reviews`.`user_review` (`reviewer_name`)
VALUES ('$_POST[thename]')";




echo "1 record added";

 

mysql_close($dbconnect)

?>

</body>

</html>