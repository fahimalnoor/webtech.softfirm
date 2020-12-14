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
</style>

<?php
if(isset($_COOKIE["manager"])){
	
if($_COOKIE["manager"]==$_REQUEST["mname"]){
$flag=0;
$conn = mysqli_connect("localhost", "root", "","softfirm");
		$sql="select * from logs where uname='".$_REQUEST["mname"]."'";
		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	//session_start();
	while($row = mysqli_fetch_assoc($result)) {
		$temp["uname"]=$row["uname"];
		$temp["utype"]=$row["utype"];
		if($_REQUEST["mname"]==$temp["uname"] && $temp["utype"]=="manager"){
		$flag=1;
		break;
	}
	else{
		$flag=0;
	}
}

if($flag==0){
	echo "Please Enter A Valid Username!";
	//header("Location:adminhome.php");
}
else if($flag==1){
$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
$target="uploads/".$_FILES['fileToUpload']['name'];
if(file_exists($target)){
	$errors=1;
	echo "File exists";
}
else{
	if(move_uploaded_file($source,$target)){
		echo "File uploaded Successfully: ".$target;
	}
	$sql="insert into ports (uname,url) values ('".$_REQUEST["mname"]."','".$target."')";
	//echo $sql;
	$conn = mysqli_connect("localhost", "root", "","softfirm");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn)){
		//echo "</br>File uploaded";
	}
}
}
}
else{
	echo "Please Enter Your Own Username!";
}
}
else{
	header("Location:logout.php");
}
?>
</br></br>
<button class="button"><a href="managerhome.php">Go To Your Home</a></button>