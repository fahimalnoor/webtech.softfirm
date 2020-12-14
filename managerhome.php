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
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
<script src="slidedownjq.js"></script>
<script> 

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>

<?php
if(isset($_COOKIE["manager"])){
?>
<center><h2>Welcome Dear Manager!</h2></center>

<hr></br>

<ul>
  <li><a class="active" href="managerhome.php">Your home</a></li>
  <li><a href="managerprofile.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>

<div id="flip">Click Here To Show Your Available Features!</div></br>
<div id="panel">
<form action="proserver.php" method="post"><pre>
<h3>Please enter a project id to check the status</h3>
<input type="text" name="projectsearch" value=""> <input type="submit" name="projectsub" value="Search" />
</pre></form>

<form action="manuserinfo.php" method="post"><pre>
<h3>Please enter a user id to check the information</h3>
<input type="text" name="usersearch" value=""> <input type="submit" name="usersub" value="Search" />
</pre></form>

<h3>Upload the latest project file into portfolio section</h3>
<form action="upload.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
Your Username: <input type="text" name="mname" value="">

Select file to upload : <input type="file" name="fileToUpload">

<input type="submit" value="Upload File" name="sbt"></pre>
</form>
</div>

<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>
<?php
}
else{
	header("Location:logout.php");
	//echo "<script>alert('Suspicious Login Attempt!');</script>";
}
?>