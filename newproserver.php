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

//client id search from db here
$flag=0;
$conn = mysqli_connect("localhost", "root", "","softfirm");
		$sql="select * from logs where uname='".$_REQUEST["clientName"]."'";
		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	//session_start();
	while($row = mysqli_fetch_assoc($result)) {
			$temp["clientName"]=$row["uname"];
			$temp["utype"]=$row["utype"];
		if($_REQUEST["clientName"]==$temp["clientName"] && $temp["utype"]=="client"){
		$flag=1;
		break;
	}
	else{
		$flag=0;
	}
}
//field validation
if(strlen($_REQUEST["newProjectId"])==0 || strlen($_REQUEST["clientName"])==0){
	echo "Please enter a project id and client username!";
}
else if($flag==0){
	echo "Invalid Client Username!";
	//header("Location:adminhome.php");
}



//project id insertion code here
else if($flag==1 && (strlen($_REQUEST["newProjectId"])!=0 || strlen($_REQUEST["clientName"])!=0)){
	//echo new project created
	$conn = mysqli_connect("localhost", "root", "","softfirm");
		$sql="insert into pros (proid,clientid) values ('".$_REQUEST["newProjectId"]."','".$_REQUEST["clientName"]."')";
		//$sql="select * from user where uname='".$_REQUEST["uname"]."'";
		//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

			if (isset($result)) {
			echo "New project created successfully!";
			} 
			else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
			
}
echo "<br/>";
?>
<br/><button class="button"><a href="adminhome.php">Go Back</a></button><br/>
<br/><button class="button"><a href="logout.php">Logout</a></button><br/>

<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>