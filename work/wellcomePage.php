<html>
<head>
<title>
</title>
<link href="../stage1/CSS/css.css" rel="stylesheet" type="text/css" >
</head>
<body>
<form action="startPage.php" METHOD="POST">

<?php
$servername ="localhost";
 $username="root";
 $password="";
 $dbname="student";

 $connection =new mysqli ($servername, $username, $password,$dbname);
  
  //select statemnt this 
 $sql ="SELECT Student_name FROM test";
 //to get data form the tables we are going to use two functions the rsult and fetch
 //there we are connect
 
 $result=$connection->query($sql);
 
 $USERNAME=$_POST['USER_NAME'];
 $rong="";
 $link="startPage.php";
 
 if(!empty($USERNAME)){
	 
 if($result->num_rows>0){
	 $num=0;
	 while($row=$result->fetch_assoc()){
		  $num++;
	 if($row["Student_name"]==$USERNAME){
		 echo  "<div id='mg'> <image src='../stage1/images/Screenshot (9).PNG'> </div>";
		 
		 
		 echo"wellCome:"."<strong>".$row["Student_name"]."</strong>"."</br>";
		 echo " <input type='submit' value='LOGINPAGE' class='BTN'> ";
		
		 
		 break;
	 }else{
		 if($result->num_rows==$num){
			 $one="<image src='../stage1/images/Screenshot (8).PNG'>";
			 $two="<image src='../stage1/images/Captured1.PNG'> "; 
			 $randomImage=rand($one,$two);
				echo "<div id='mg'>".$randomImage."</div>";
			 $rong="Invalide USERNAME OR password";
		 echo" <font color='red'>$rong</font>";}
	 }
		 
	 }
	 
			}
 }else
 { echo "<font color='red'> PLEASE ENTER USERNAME AND PASSWORD !</font>" ;
         echo " <input type='submit' value='LOGINPAGE'> ";
}





?>


</body>

</html>