<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pollihat"; // Database name 
$tbl_name="customers"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
if(isset($_GET['serial']))
{
$serial=$_GET['serial'];

// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE serial=$serial";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bangladesh Power Development Board</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	color: #000;
}
-->
</style></head>

<body>
<table width="100%" border="0"><form action="edit_data.php?no=<?php echo $serial; ?>" method="post">
  <tr>
    <td width="17">&nbsp;</td>
    <td width="1" height="42">&nbsp;</td>
    <td colspan="11" align="center" valign="middle"><p><strong>বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড<br/>
    "রাজস্ব তহবিল চাহিদা পত্র&quot;</strong></p></td>
    <td width="47">&nbsp;</td>
    <td width="26">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6" align="left" valign="top"><strong>দপ্তরের নাম :-ক্রয় পরিদপ্তর্</strong></td>
    <td colspan="6" align="right" valign="top"><strong>আঞ্চলিক হিসাব দপ্তর :-সিপি এন্ড এএ সেল</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="216">&nbsp;</td>
    <td colspan="13"><table width="100%" border="1">
      <tr>
        <td width="5%" align="left" valign="top">&nbsp;১</td>
        <td width="8%" align="left" valign="top">&nbsp;২</td>
        <td width="9%" align="left" valign="top">&nbsp;৩</td>
        <td width="11%" align="left" valign="top">&nbsp;৪</td>
        <td width="11%" align="left" valign="top">&nbsp;৫</td>
        <td width="9%" align="left" valign="top">&nbsp;৬</td>
        <td width="9%" align="left" valign="top">&nbsp;৭</td>
        <td width="10%" align="left" valign="top">&nbsp;৮</td>
        <td width="12%" align="left" valign="top">&nbsp;৯</td>
        <td width="10%" align="left" valign="top">&nbsp;১০</td>
        <td width="6%" align="left" valign="top">&nbsp;১১</td>
        </tr>
      <tr>
        <td align="left" valign="top">&nbsp;ক্রমিক <br/>&nbsp;নং</td>
        <td align="left" valign="top">&nbsp;বাজেটের খাত</td>
        <td align="left" valign="top">&nbsp;চলতি অর্থ<br/>
          &nbsp;বৎসরের বাজেট<br/>
          &nbsp;বরাদ্দ</td>
        <td align="left" valign="top">&nbsp;সংশ্লিষ্ট দপতরের<br/>
          &nbsp;চাহিদাকৃত অর্থের<br/>
          &nbsp;পরিমান </td>
        <td align="left" valign="top">&nbsp;এযাবৎ স্হাপনকৃত<br/>
          &nbsp;অর্থের পরিমান</td>
        <td align="left" valign="top">&nbsp;এযাবৎ<br/>
          &nbsp;পরিশোধকৃত<br/>&nbsp;অর্থের পরিমান</td>
        <td align="left" valign="top">&nbsp;হিসাব নং,<br/>
          &nbsp;ব্যাংকের নাম<br/>
          &nbsp;ও শাখা</td>
        <td align="left" valign="top">&nbsp;আঞ্চলিক রাজস্ব<br/>
          &nbsp;ঠিকাদার ব্যাংক<br/>
          &nbsp;হিসাবের জের</td>
        <td align="left" valign="top">&nbsp;আহিদ কতৃক<br/>
          &nbsp;অনুমোদিত/প্রি-<br/>
          &nbsp;অডিটকৃত বিলের<br/>
          &nbsp;পরিমান</td>
        <td align="left" valign="top">&nbsp;আহিদ কতৃক<br/>
          &nbsp;চাহিদাকৃত বিলের<br/>
          &nbsp;পরিমান</td>
        <td align="center" valign="top">মন্তব্য</td>
      </tr>
    </table>
      <table width="100%" border="0">
        <tr>
          <td width="2%" align="left" valign="top">&nbsp;</td>
          <td width="8%" align="left" valign="top"><textarea name="bajet_khat" id="bajet_khat" cols="10" rows="5"><?php echo $row['name'];?></textarea></td>
          <td width="9%" align="left" valign="top"><textarea name="bajet_boraddo" id="bajet_boraddo" cols="10" rows="5"><?php echo $row['address'];?></textarea></td>
          <td width="12%" align="left" valign="top"><textarea name="boraddo" id="boraddo" cols="15" rows="5"><?php echo $row['phone'];?></textarea></td>
          <td width="8%">&nbsp;</td>
          <td width="12%">&nbsp;</td>
          <td width="20%" align="left" valign="top"><label>
            <textarea name="bank" id="bank" cols="25" rows="5"><?php echo $row['email'];?></textarea>
          </label></td>
          <td width="7%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="8%">&nbsp;</td>
        </tr>
      </table>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="98" align="left" valign="top">সরবরাহকারী :-</td>
    <td colspan="3"><label>
      <input name="supply" type="text" id="supply" value="<?php echo $row['supply'];?>" size="45" />
    </label></td>
    <td width="26">&nbsp;</td>
    <td width="87">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="77">&nbsp;</td>
    <td colspan="4" rowspan="3" align="center" valign="top"><label>
      <textarea name="per_no" id="per_no" cols="45" rows="5"><?php echo $row['per_no'];?></textarea>
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left" valign="top">কন্সাইন :-</td>
    <td colspan="3"><input name="supply2" type="text" id="supply2" value="<?php echo $row['supply2'];?>" size="45" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="92">&nbsp;</td>
    <td width="192">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" align="center" valign="top"><input type="text" name="name1" id="name1" value="<?php echo $row['name1'];?>"/>
      <br />
সহকারী পরিচালক(হিসাব)<br />
ক্রয় পরিদপ্তর, বিউবো, ঢাকা</td>
    <td align="center" valign="top"><p>
        <input type="text" name="name2" id="name2" value="<?php echo $row['name2'];?>"/>
       <br/>পরিচালক<br />
    ক্রয় পরিদপ্তর, বিউবো, ঢাকা</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3" align="left" valign="top"><strong>সংশ্লিষ্ট দপ্তর </strong>প্রধানের <strong>সীলসহ স্বাক্ষর</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3" align="left" valign="top">ছক পূরনের নিয়মাবলী :</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><strong>আহিদ প্রধানের সীলসহ স্বাক্ষর</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="12">১. ছকের </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right" valign="top"><a href="index.php"></td>
    <td align="right" valign="top"><label>
    

<input type="submit" name="save" id="save" value="Save" />
     
    </label></td>
    <td>&nbsp;</td>
  </tr>
   </form>
   
</table>
<? 

// close connection  
mysql_close(); 

?>
</body>
</html>