<?php
include ('dbh.php');
include ('classwork.php');
include ('viewuser.php');

?>
<!doctype html>
<html>
<head>
<title></title>
</head>
<body>
<?php
$user = new viewuser();
$user->showallusers();
?>
</body>
</html>
