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

if (isset($_GET['serial']) && is_numeric($_GET['serial']))
{
$serial = $_GET['serial'];

$result = mysql_query("DELETE FROM p_electronic_view WHERE serial=$serial")
or die(mysql_error());

header("Location:database_electronic_view.php");
}
else

{
header("Location:database_electronic_view.php");
}
?>
