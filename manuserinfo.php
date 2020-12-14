<style>
ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li{
  float: left;
}
li a{
  display: block;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #ddd;
}
li a:hover:not(.active) {
  background-color: #ddd;
}
.active {
  background-color: #CD5C5C;
}

.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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

if((isset($_COOKIE["manager"]))){

if($_REQUEST["usersearch"]==''){
	echo "Please Enter A User Id To Search!";
}
else{
include("db_rw_json.php");
$jsonData= getJSONFromDB("select name,uname,dob,gender,utype,phone,email from logs where uname='".$_REQUEST["usersearch"]."'");
$jsn=json_decode($jsonData);

foreach($jsn as $v){
	if($v->utype=="client" || $v->utype=="developer"){
?>
<center><h2>User Information</h2></center></head>
<hr>

<ul>
  <li><a href="managerhome.php">Go Back</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>
<form><pre>
<h3>Name: </h3>
<input type="text" name="name" value="<?php echo $v->name ?>"></br></br>

<h3>Username: </h3>
<input type="text" name="uname" value="<?php echo $v->uname ?>"></br></br>

<h3>Date Of Birth: </h3>
<input type="text" name="dob" value="<?php echo $v->dob ?>"></br></br>

<h3>Gender: </h3>
<input type="text" name="gender" value="<?php echo $v->gender ?>"></br></br>

<h3>User Type: </h3>
<input type="text" name="utype" value="<?php echo $v->utype ?>"></br></br>

<h3>Phone Number: </h3>
<input type="text" name="phone" value="<?php echo $v->phone ?>"></br></br>

<h3>Email: </h3>
<input type="text" name="email" value="<?php echo $v->email ?>"></br></br>
</pre>
</form>
</br>
<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>
<?php
}
else{
	echo "You Can Search Info Only Of Developers & Clients!";
}
}
}
}
else{
	header("Location:logout.php");
	//echo "<script>alert('Suspicious Login Attempt!');</script>";
}
?>
</br></br>

<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>