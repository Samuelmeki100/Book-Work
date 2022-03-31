<html>
<head></head><title></title>
<link href="/ncc/new/css.css" rel="stylesheet" type="text/css" >
</head>
<form action="startPage.php" METHOD="POST">
<?php

 $servername ="localhost";
 $username="root";
 $password="";
 $dbname="Student";
//connect to server
 $connection =new mysqli($servername, $username, $password,$dbname);
 
//check if connected to servever
 if($connection->connect_error){
	die("connect failed:" .$connection->Connect_error);
}else{
echo "connected successfully</br>";}

  //creating valiable that we are going to uses in inserting the data
  $StudentName=$_POST['StudentName'];
 $Addreas=$_POST["Addreas"];
 $PhoneNumber=$_POST["PhoneNumber"];
 $Email=$_POST['Email'];

if(!empty($StudentName)){
//insert data into database
$sql ="INSERT INTO test(Student_name,Physical_Addreas,Phone_number,Email)
 VALUES ('$StudentName', '$Addreas','$PhoneNumber','$Email')";

 //check is data is set
 if ($connection->query($sql)===true){
	echo "New recode created Successfully";
	 echo " <input type='submit' value='LOGINPAGE'class='BTN' > ";
}else{echo "ERROR"; }
}else
{
	echo "Field Empty ! GO BACK";
	
	
}
$connection->close();
?>
</body>
</html>