<?php
$con = mysql_connect("localhost","smapcom1_wedding","m.o7a@bj");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("smapcom1_wedding", $con);

// get data
$name=$_POST['name'];
$cellphone=$_POST['cellphone'];
$count=$_POST['count'];
$address=$_POST['address'];
$startDate=$_POST['start-date'];
$endDate=$_POST['end-date'];
$remark=$_POST['remark'];
$note=$_POST['note'];
$sql = "INSERT INTO `invitations` (`name`, `cellphone`, `count`, `start-date`, `end-date`, `remark`, `address`, `note`) VALUES ('$name', '$cellphone', '$count', '$startDate', '$endDate','$remark', '$address', '$note')";
if (!mysql_query($sql,$con))
{
    die('Error: ' . mysql_error());
}
echo "Thanks for your coming!";
mysql_close($con);




