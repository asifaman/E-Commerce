<html>
<head>
<script>
var x=confirm("Are you sure you want to quit?")
if (!x)
	window.location="http://www.pollihat.com"
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

$result = mysql_query("DELETE FROM customer WHERE id=$id")
or die(mysql_error());

header("Location:index.php");
}
else

{
header("Location:index.php");
}
?>
