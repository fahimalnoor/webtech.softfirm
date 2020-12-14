<center><b><h2>Welcome to Portfolio section</br></h2></b></center>
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

<hr></br>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a class="active" href="portfolio.php">Portfolio</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>
</br>
<h3>Check Out Our Latest Works And Projects In This Section</h3></br>

<?php

	// open this directory 
	$myDirectory = opendir("uploads");
	// get each entry
	while($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}
	// close directory
	closedir($myDirectory);
	//	count elements in array
	$indexCount	= count($dirArray);
?>
		<?php
		// loop through the array of files and print them all in a list
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png'){
				echo '<center><img src="uploads/' . $dirArray[$index] . '" width="500px" height="250px" /></center></br></br>';
			}	
		}
		?>	
	
</br></br>

<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>