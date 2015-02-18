<html>
<head>
<script>
var x=confirm("Are you sure you want to quit?")
if (!x)
	window.location="http://www.yahoo.com"
</script>
</head>
<body>
Welcome to my website!.
</body></html>
<?php
include('config.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = mysql_query("DELETE FROM adminlogin WHERE id=$id")
or die(mysql_error());

header("Location: show_user.php");
}
else

{
header("Location:show_user.php");
}
?>
