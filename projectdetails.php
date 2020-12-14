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

<center><h2>Project Details</h2></center></head>
<hr></br>

<ul>
  <li><a class="button" href="logout.php">Logout</a></li>
</ul></br>
<form action="proserver.php" method="post">
<h3>Project ID: </h3>
<input type="text" name="projectId" value=<?php $temp['projectSearch']?>></br></br>

<h3>Project Client Username: </h3>
<input type="text" name="projectClient" value=$temp['clientId']></br></br>

<h3>Project Status: </h3>
<input type="text" name="projectStatus" value=$temp['proStatus']></br></br>

<h3>Project Completion Percentage: </h3>
<input type="search" name="completePercent" value=$temp['procomppercent']></br></br>
</form>
</br>
<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>