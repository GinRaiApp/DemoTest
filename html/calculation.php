<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เครื่องคิดเลข</title>
</head>

<body>
<?php
if(isset($_POST['num2'])){

if($_POST['sum'] == "+"){
$result=$_POST['num1']+$_POST['num2'];
}else if($_POST['sum'] == "-"){
$result=$_POST['num1']-$_POST['num2'];
}else if($_POST['sum'] == "*"){
$result=$_POST['num1']*$_POST['num2'];
}else if($_POST['sum'] == "/"){
$result=$_POST['num1']/$_POST['num2'];
}else{
$result=$_POST['num1']%$_POST['num2'];
}

}

?>

<h2>เครื่องคิดเลข</h2>
<form method="post">
<p>ค่าที่ 1 : <input type="text" name="num1" size="10" value="<?php echo $_POST['num1'] ?>"></p>
<input type="radio" name="sum" value="+" checked="checked" <?php if ($_POST['sum']=="+"){?> checked='checked'<?php } ?>/>บวก
<input type="radio" name="sum" value="-" <?php if ($_POST['sum']=="-"){?> checked='checked'<?php } ?>/>ลบ
<input type="radio" name="sum" value="*" <?php if ($_POST['sum']=="*"){?> checked='checked'<?php } ?>/>คูณ
<input type="radio" name="sum" value="/" <?php if ($_POST['sum']=="/"){?> checked='checked'<?php } ?>/>หาร
<p>ค่าที่ 2 : <input type="text" name="num2" size="10" value="<?php echo $_POST['num2'] ?>"></p>
<p>คำตอบ : <input type="text" name="result" size="10" value="<?php echo $result ?>" ></p>
<input type ="submit" value="submit"><br>
</form>

</body>
</html>