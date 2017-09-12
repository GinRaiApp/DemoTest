<?php

	$ext = pathinfo(basename($_FILES['upload']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'fp_'.rand(1,9999).".".$ext;
	$image_path = "../photos/FloorPlan/";
	$upload_path = $image_path.$new_image_name;
	
	
	$success = move_uploaded_file($_FILES['upload']['tmp_name'],$upload_path);
	$upload = $new_image_name;
	
	

	$objConnect = mysql_connect("localhost","root","Password*1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("p_inventory");
	$strSQL = "INSERT INTO floorp ";
	$strSQL .="(date,floor_id,floor_number,floor_area,fp,building) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["date"]."'";
	$strSQL .=",'".$_POST["floor_id"]."','".$_POST["floor_number"]."','".$_POST["floor_area"]."' ";
	$strSQL .=",'$upload','".$_POST["building"]."') ";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Done.');";
		echo "</script>";
	}
	else
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Can't Save Error.');";
		echo "</script>";
	}

	
if ($_POST['submit']){


	$name = $_FILES['upload']['name'];
	$temp = $_FILES['upload']['tmp_name'];
	$type = $_FILES['upload']['type'];
	$size = ($_FILES['upload']['size']/1024);
	
	echo "***File Detail*** <br><br>
		  Name: $name<br>
		  File name : $new_image_name<br>
		  Stored in: $temp<br>
		  Type: $type<br>
		  Size: $size kb.<br><br> ";
		  

	
	
	
	//$f_type = $_FILES['upload']['type'];
	//$fname=time()."_".rand(1,9999);   //เปลี่ยนชื่อไฟล์ใหม่เพื่อป้องกันการซ้ำของไฟล์		

	//if($f_type=="image/x-png"){$true_fp="$fname.png";}
	//else if(($f_type=="image/pjpeg")||($f_type=="image/jpeg")){$true_fp="$fname.jpg";}
	//else if(($f_type=="image/gif"){$true_fp="$fname.gif";}	  
	//else{echo"<br/>Only .GIF, .PNG, .JPG !!!";}
		  
    //copy($_FILES['upload']['tmp_name'],"./photo/".$true_fp);	
	  
	
//	if(($type == "image/jpeg") || ($type == "image/jpg") || 
//		($type == "image/gif") || ($type == "image/png") || 
//		($type == "image/pdf")){
//			echo "This file $type is not allowed";
			
			
//		}else{
//			echo "This type $type is not allowed";
			
//		}
		

	
}else{
	
	header("Location: index.html");
}




?>