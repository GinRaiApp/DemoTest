<!DOCTYPE html>
<html>
<head>
	<title>Rental Building Master</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/p_style.css">
	<link rel="stylesheet" type="text/css" href="/p_inventory/css/w3.css">
	<script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
</head>

<body>

	<div class="navbar">
	  <a href="http://localhost/p_inventory/html/first.php "><b>True Inventory</b></a>
	  <a href="http://localhost/p_inventory/html/home.php">Report</a>
	  <a href="http://localhost/p_inventory/html/floor.php">FloorPlan</a>
	  <a href="http://localhost/p_inventory/html/master.php">Rental Building Master</a>
	  <a href="http://eus/cm/inventory/index.php#" target="_blank"> CM Inventory </a>
	</div>

	
	<div class="frist"  style="padding-top:100px;text-decoration;">
	<!-- Header -->
    <header class="w3-container">
      <h1><b><i class="fa fa-file w3-xxlarge"></i> Create Rental Building Master</b></h1>
    </header>
	
	<form>
		<h2>อัตราค่าบริการ : </h2>
			<table id="mytable">
			  <tr style="background-color:gray; color:#ffffff;">
				<th> อาคาร </th>
				<th> พื้นที่รวม (ตร.ม.) </th>
				<th> จำนวนที่นั่ง </th>
				<th> ค่าเช่าพื้นที่ (บาท/ตร.ม.) </th>
				<th> ค่าบริการ (บาท/ตร.ม.) </th>
				<th> ค่าบริการส่วนเพิ่ม </th>
				<th> ค่าเช่าเฟอร์นิเจอร์ (บาท/ตร.ม.) </th>
				<th> ค่าบริการIP (บาท/ตร.ม.) </th>
				<th> ค่าบริการพิเศษ (บาท/ตร.ม.) </th>
				<th> ค่าเช่าGen/UPS(บาท/ตร.ม.) </th>
				<th> ค่าไฟฟ้า (บาท/unit) </th>
				<th> ค่าโอที (บาท/Hr) </th>
				<th> ค่าน้ำ (บาท/unit) </th>
				<th> รวมอัตราค่าเช่าบริการ (บาท/ตร.ม./เดือน) </th>
				<th> AVG อัตราค่าเช่าบริการ </th>
				<th> Average seat per sqm </th>
				<th> Cost per Seat </th>
			  </tr>
			  <th colspan="17" style="background-color:lightgray;">CP2</th>
			  <tr>
				<td>14</td>
				<td>437</td>
				<td>93</td>
				<td>200</td>
				<td>375</td>
				<td>-</td>
				<td>-</td>
				<td>120</td>
				<td>-</td>
				<td>-</td>
				<td>5.08</td>
				<td>250</td>
				<td>21.4</td>
				<td>695.00</td>
				<td>762.80</td>
				<td>4.7</td>
				<td>3,265.753</td>

			  </tr>
			  

			 			  
			</table>
			<br>
			<button onclick="myFunction2()">Add In Row</button>
			<button onclick="myFunction3()">Add Row</button>

			
			<div class="logina " style="border-style:none; background-color:linen; width:100%; margin-left:89%; " onclick="myFunction()"  >
				<a href="#"  style=" background-color: #4CAF50;  color: white; border-radius: 4px;">
					  <span class="glyphicon glyphicon-save-file" ></span> Save File / Print
				</a>
				
			</div>

	</form>
	
	<script>
		function myFunction() {
			window.print();
		}
		
		
		
		
		function myFunction2() {
			var table = document.getElementById("mytable");
			var row = table.insertRow(1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);
			var cell5 = row.insertCell(4);
			var cell6 = row.insertCell(5);
			var cell7 = row.insertCell(6);
			var cell8 = row.insertCell(7);
			var cell9 = row.insertCell(8);
			var cell10 = row.insertCell(9);
			var cell11 = row.insertCell(10);
			var cell12 = row.insertCell(11);
			var cell13 = row.insertCell(12);
			var cell14 = row.insertCell(13);
			var cell15 = row.insertCell(14);
			var cell16 = row.insertCell(15);
			var cell17 = row.insertCell(16);

			cell1.innerHTML = "new";
			cell2.innerHTML = "new";
			cell3.innerHTML = "new";
			cell4.innerHTML = "new";
			cell5.innerHTML = "new";
			cell6.innerHTML = "new";
			cell7.innerHTML = "new";
			cell8.innerHTML = "new";
			cell9.innerHTML = "new";
			cell10.innerHTML = "new";
			cell11.innerHTML = "new";
			cell12.innerHTML = "new";
			cell13.innerHTML = "new";
			cell14.innerHTML = "new";
			cell15.innerHTML = "new";
			cell16.innerHTML = "new";
			cell17.innerHTML = "new";
		}
		
		function myFunction3() {
			var table = document.getElementById("mytable");
			var row = table.insertRow(1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);
			var cell5 = row.insertCell(4);
			var cell6 = row.insertCell(5);
			var cell7 = row.insertCell(6);
			var cell8 = row.insertCell(7);
			var cell9 = row.insertCell(8);
			var cell10 = row.insertCell(9);
			var cell11 = row.insertCell(10);
			var cell12 = row.insertCell(11);
			var cell13 = row.insertCell(12);
			var cell14 = row.insertCell(13);
			var cell15 = row.insertCell(14);
			var cell16 = row.insertCell(15);
			var cell17 = row.insertCell(16);

			cell1.innerHTML = "new";
			cell2.innerHTML = "new";
			cell3.innerHTML = "new";
			cell4.innerHTML = "new";
			cell5.innerHTML = "new";
			cell6.innerHTML = "new";
			cell7.innerHTML = "new";
			cell8.innerHTML = "new";
			cell9.innerHTML = "new";
			cell10.innerHTML = "new";
			cell11.innerHTML = "new";
			cell12.innerHTML = "new";
			cell13.innerHTML = "new";
			cell14.innerHTML = "new";
			cell15.innerHTML = "new";
			cell16.innerHTML = "new";
			cell17.innerHTML = "new";	
			
		}
		
				

	</script>
	
</body>

</html>