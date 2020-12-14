<style>
button a{
  display: block;
  color: white;
  padding: 7px 7px;
  text-decoration: none;
}
.button {
  background-color: #333;
  color: white;
  border: 2px solid #555555;
}
.button:hover {
  background-color: #ddd;
  color: white;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333;
   color: white;
   text-align: center;
}
</style>

<?php
$flag=0;
$conn = mysqli_connect("localhost", "root", "","softfirm");
		$sql="select * from logs where uname='".$_REQUEST["uname"]."'";
		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	//session_start();
	while($row = mysqli_fetch_assoc($result)) {
			$temp["uname"]=$row["uname"];
			$temp["pass"]=$row["pass"];
			$temp["utype"]=$row["utype"];
		if($_REQUEST["uname"]==$temp["uname"] && md5($_REQUEST["pass"])==$temp["pass"]){
		$flag=1;
		break;
	}
	else{
		$flag=0;
	}
}
if($flag==0){
	echo "<p style='color:red'>Invalid Username Or Password!</p>";
	?>
	<button class="button"><a href="home.php">Go To Home</a></button><br/>
	<div class="footer">
	Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
	Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
	</div>
	<?php
}
else if($flag==1){
	
	if($temp["utype"]=="admin"){
	session_start();
	setcookie("admin",$_REQUEST["uname"], time() + 1800);
	header("Location:adminhome.php");
	}
	else if($temp["utype"]=="manager"){
	session_start();
	setcookie("manager",$_REQUEST["uname"], time() + 1800);
	header("Location:managerhome.php");
	}
	else if($temp["utype"]=="developer"){
	session_start();
	setcookie("developer",$_REQUEST["uname"], time() + 1800);
	header("Location:developerhome.php");
	}
	else if($temp["utype"]=="client"){
	session_start();
	setcookie("client",$_REQUEST["uname"], time() + 1800);
	header("Location:clienthome.php");
	}
	}
	//mysql_close($conn);

?>