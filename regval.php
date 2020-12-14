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
$dotPos=strpos($_REQUEST["email"],".");
$atPos=strpos($_REQUEST["email"],"@");
if(strlen($_REQUEST["name"])==0 || strlen($_REQUEST["uname"])==0 || strlen($_REQUEST["dob"])==0 || strlen($_REQUEST["phone"])==0 || strlen($_REQUEST["email"])==0 || strlen($_REQUEST["pass"])==0){
	echo "All fields are mandatory!";
}
else if($_REQUEST["pass"]!=$_REQUEST["confirmpass"]){
	echo "Passwords must match!";
}
else if(strlen($_REQUEST["phone"])!=11){
	echo "Phone digit length must be 11!";
}
else if($atPos>$dotPos || strlen($dotPos)=='' || strlen($atPos)=='' ){
	echo "Invalid Email!";
}
else{
	echo "Registration successful!";
	$conn = mysqli_connect("localhost", "root", "","softfirm");
		$sql="insert into logs (name,uname,dob,gender,utype,phone,email,pass) values ('".$_REQUEST["name"]."','".$_REQUEST["uname"]."','".$_REQUEST["dob"]."','".$_REQUEST["gender"]."','".$_REQUEST["utype"]."','".$_REQUEST["phone"]."','".$_REQUEST["email"]."','".md5($_REQUEST["pass"])."')";
		//$sql="select * from user where uname='".$_REQUEST["uname"]."'";
		//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

			if (isset($result)) {
			echo "New record created successfully";
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
			
}
echo "<br/>";
?>
<br/><button class="button"><a href="signup.php">Go Back</a></button><br/>
<br/><button class="button"><a href="home.php">Go to home</a></button><br/>

<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>