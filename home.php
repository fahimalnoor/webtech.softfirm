<center><b><h2>Welcome to X Software Solution</br></h2></b></center>
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
<hr>

<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="portfolio.php">Portfolio</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>

<form action="server.php" method="post"><pre>
<h2>Login here!</h2>Username:
<input value="" type="text" name="uname" /></br>
Password:
<input type="password" name="pass" /></br>
<input type="submit" name="sub" value="Login" /></br>
New user? <a href="signup.php">Register here!</a>
</pre>
</form>

<center><b><h2>We Are Always At Your Service!</br></h2></b></center>
<center><img src="images\imghome.jpg" width="1200px" height="600px"></center>
</br></br></br>
<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>