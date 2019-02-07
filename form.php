<html>
<head>
<title>formphp</title>
</head>
<body>
<form> 
<table>
<tr>
<td width="145">FIRSTR NAME</td>
<td width="281"><input type="text" value="" name="fname" placeholder="ENTER THE FIRST NAME" ></td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" value="" name="lname"placeholder="ENTER THE LAST NAME" ></td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><input type="text" value="" name="mail"placeholder="ENTER THE EMAIL ID" ></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" value="" name="password"placeholder="ENTER VALID PASSWORD" ></td>
</tr>
<tr>
<td>GENDER</td>
<td>
<input type="radio" value="" name="male">MALE
<input type="radio" value="" name="female">FEMALE
</td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
<td><select name="DATE">
<option value="don't know" name="DATE">DATE</option>
<?php for($i=1;$i<=31;$i++)
{
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>
<select name="month">
<option value="don't know" name="month">MONTH</option>
<?php $a=array("jan","feb","mar","apr","may",'"june","july","aug","sept","oct","nov","dec");

foreach($a as $b)
{
?>
<option value="<?php echo $b; ?>"><?php echo $b; ?></option>
<?php } ?>
</select>
<select name="year">
<option value="don't know" name="year">YEAR</option>
<?php for($i=1945;$i<=2020;$i++)
{
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>
</td>
</tr>
<tr>
<td>CONTACT NUMBER</td>
<td><input type="text" value="" name="cno"placeholder="ENTER CONTACT NUMBER" ></td>
</tr>
<tr>
<td>ADDRESS</td>
<td><input type="textarea" value="" name="address"placeholder="ENTER ADDRESS" ></td>
</tr>
</table>
</form>
</body>
</html>
