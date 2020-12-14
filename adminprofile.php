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
</style>

<?php
if(isset($_COOKIE["admin"])){

include("db_rw_json.php");
$jsonData= getJSONFromDB("select name,email,phone from logs where uname='".$_COOKIE["admin"]."'");

$jsn=json_decode($jsonData);

foreach($jsn as $v){

?>
<center><h2>Welcome To Your Profile!</h2></center></head>
<body>
<hr></br>

<ul>
  <li><a href="adminhome.php">Your home</a></li>
  <li><a class="active" href="adminprofile.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>

<form>
<h3>Your Name: </h3>
<input type="text" name="txtName" value="<?php echo $v->name ?>"></br></br>

<h3>Phone: </h3>
<input type="text" name="txtUserPhone" value="<?php echo $v->phone ?>"></br></br>

<h3>Email: </h3>
<input type="text" name="txtUserEmail" value="<?php echo $v->email ?>"></br></br>

<button type="submit">Save</button></br></br></br>

</form></br>

<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>
<?php
}
}
else{
	header("Location:logout.php");
	//echo "<script>alert('Suspicious Login Attempt!');</script>";
}
?>