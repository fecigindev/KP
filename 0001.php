<!DOCTYPE html>
<html>
<head>
	<title>pelangan</title>
</head>
<style type="text/css">
.mytable{
	width: 60%;
	background-color: lawngreen;
	padding: 5px;
}
.mytable table, td, th {
    border: 1px solid black;
}

.mytable table {
    border-collapse: collapse;
    width: 100%;
}

.mytable th {
    height: 50px;
}
</style>
<body>
<div class="mytable">
	<h3>list barang</h3>
<table>
	<tr>
		<td>orderID</td>
		<td>nama</td>
		<td>barang</td>
		<td>jumlah</td>
		<td>dp</td>
		<td>harga</td>
	</tr>
<?php
$conn = mysqli_connect("localhost","root","","kp");
$result = $conn->query("SELECT * FROM `pelangan`");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>
	<tr>
		<td><?php echo $row['orderID'];?></td>
		<td><?php echo $row['nama'];?></td>
		<td><?php echo $row['barang'];?></td>
		<td><?php echo $row['jumlah'];?></td>
		<td><?php echo $row['dp'];?></td>
		<td><?php echo $row['harga'];?></td>
		
	</tr>
<?php
	}
echo "</table>";
} else {
	echo "tidak ada hasil";
}
?>
</div>
</body>
</html>
