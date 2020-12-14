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
if(isset($_COOKIE["admin"])){
?>
<center><h2>Welcome Dear Admin!</h2></center>
<hr></br>

<ul>
  <li><a class="active" href="adminhome.php">Your home</a></li>
  <li><a href="adminprofile.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>

<div id="flip">Click Here To Show Your Available Features!</div></br>
<div id="panel">
<form action="proserver.php" method="post"><pre>
<h3>Please enter a project id to check the status</h3>
<input type="text" name="projectsearch" value=""> <input type="submit" name="projectsub" value="Search" />
</pre></form>

<form action="aduserinfo.php" method="post"><pre>
<h3>Please enter an user id to check the information</h3>
<input type="text" name="usersearch" value=""> <input type="submit" name="usersub" value="Search" />
</pre></form>

<form action="newproserver.php" method="post"><pre>
<h3>Create a new project</h3>
Project ID: 	 <input type="text" name="newProjectId" value="">

Client Username: <input type="text" name="clientName" value="">

<input type="submit" name="newProjectSub" value="Create Project" />
</pre></form>
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