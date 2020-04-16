<?php
mysql_connect('sql1.njit.edu', 'rdn5', 'Phonewaterbankhorse98!');
mysql_select_db('rdn5');
$sql = "SELECT * FROM realtors";
$sql2 = "SELECT * FROM clients";
$result = mysql_query($sql);
$result2 = mysql_query($sql2);
?>

<!DOCTYPE html>
<html>
<meta name="View" content="width=device-width, initial-scale=1">
<style>
#myDIV {
	display: none;
}
#myDIV2 {
	display: none;
}
#wrapper {
	text-align: left;
}
#wrapper2 {
	text-align: center;
}
	
</style>
	<title>
	 Database Fethcer
	</title>
<body>
   <div id = "wrapper">
   <button onclick = "showPage()">Realtors</button>
   </div>
   
   <div id="myDIV">

	<table align="left" border="1px" style="width:300px; line-height30px;">
		<tr>
			<th colspan="5"><h2>Realtor Records</h2></th>
		</tr>
		<tr>
			<th> ID </th>
			<th> Name </th>
			<th> Password </th>
			<th> Email </th>
			<th> Appointment </th>
		</tr>

<?php
	while($rows = mysql_fetch_assoc($result))
	{
?>
		<tr>
			<td><?php echo $rows['ID']; ?></td>
			<td><?php echo $rows['Name']; ?></td>
			<td><?php echo $rows['Password']; ?></td>
			<td><?php echo $rows['Email']; ?></td>
			<td><?php echo $rows['Appointment']; ?></td>
		</tr>
<?php
	}
?>
	</table>
   </div>
      <script>
	function showPage() {
	var x = document.getElementById("myDIV");
	   if (x.style.display === "block") {
	      x.style.display = "none";
	   } else {
	      x.style.display = "block";
	   }
	}

   </script>
   
   <div id="wrapper2">
   <button align="center" onclick = "showClient()">Clients</button>
   </div>
   
   <div id="myDIV2">
   
   <table align="center" border="1px" style="width:300px; line-height30px;">
		<tr>
			<th colspan="5"><h2>Clientelle</h2></th>
		</tr>
		<tr>
			<th> Name </th>
			<th> Buyer/Seller </th>
			<th> Address </th>
			<th> Num of Homes </th>
			<th> Appointment Date </th>
		</tr>

<?php
	while($rows = mysql_fetch_assoc($result2))
	{
?>
		<tr>
			<td><?php echo $rows['Name']; ?></td>
			<td><?php echo $rows['Buyer']; ?></td>
			<td><?php echo $rows['Address']; ?></td>
			<td><?php echo $rows['HomesToVisit']; ?></td>
			<td><?php echo $rows['DateTime']; ?></td>
		</tr>
<?php
	}
?>
	</table>
    </div>
	
    <script>
	function showClient() {
	var x = document.getElementById("myDIV2");
	   if (x.style.display === "block") {
	      x.style.display = "none";
	   } else {
	      x.style.display = "block";
	   }
	}

    </script>
   
</body>
</html>