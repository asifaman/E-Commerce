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

if (isset($_GET['serial']) && is_numeric($_GET['serial']))
{
$serial = $_GET['serial'];

$result = mysql_query("DELETE FROM order_detail WHERE serial=$serial")
or die(mysql_error());

header("Location: order_detail.php");
}
else

{
header("Location:order_detail.php");
}
?>
