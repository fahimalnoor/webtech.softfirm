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
<h2>Sign Up For Free</br></h2>
<hr>
<button class="button"><a href="home.php">Go To Home</a></button></br></br>

<script type="text/javascript">
var xmlhttp = new XMLHttpRequest();

function showHint(el) {
	var str=el.value;
	errors=0;
	document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spinner").style.visibility="hidden";
		}
	};
	var url="";
	el.id="uname";
	url="unamefetch.php?uname="+str;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}

function validate(){
	var flag=true;
	var nm=document.frm.name.value;
	var un=document.frm.uname.value;
	var db=document.frm.dob.value;
	var phn=document.frm.phone.value;
	var em=document.frm.email.value;
	var ps=document.frm.pass.value;
	var cpass=document.frm.confirmpass.value;
	var str="";
	if(nm.length==0 && un.length==0 && db.length==0 && phn.length==0 && em.length==0 && ps.length==0 && cpass.length==0){
		flag=false;
		str="All Fields Are Mandatory";
		document.getElementById("msgall").innerHTML=str;
	}
	if(nm.length==0 || un.length==0 || db.length==0 || phn.length==0 || em.length==0 || ps.length==0 || cpass.length==0){
		flag=false;
		str="All Fields Are Mandatory";
		document.getElementById("msgall").innerHTML=str;
	}
	else if(nm.length==0){
		flag=false;
	}
	else if(un.length==0){
		flag=false;
	}
	else if(document.getElementById("txtHint").innerHTML=="Username Taken!"){
		flag=false;
	}
	else if(db.length==0){
		flag=false;
	}
	else if(phn.length!=11){
		flag=false;
	}
	else if(em.length==0){
		flag=false;
	}
	else if(ps.length<5){
		flag=false;
	}
	else if(cpass!=ps){
		flag=false;
	}
	return flag;
}
function fname(){
	var nm=document.frm.name.value; //document=DOM object
	if(nm.length<3){
		document.frm.name.style.color="red";
		document.getElementById("msgfn").innerHTML="Minimum 3 Characters!";
	}
	else{
		document.frm.name.style.color="black";
		document.getElementById("msgfn").innerHTML="Valid Name";
	}
}
function funame(){
	var un=document.frm.uname.value; //document=DOM object
	if(un.length<3){
		document.frm.uname.style.color="red";
		document.getElementById("msgun").innerHTML="Minimum 3 Characters!";
	}
	else{
		document.frm.uname.style.color="black";
		document.getElementById("msgun").innerHTML="Valid Name";
	}
}
	function fdob(){
	var db=document.frm.dob.value; //document=DOM object
	if(db==''){
		document.frm.dob.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msgdb").innerHTML="Please Pickup A Date";
	}
	else{
		document.frm.dob.style.color="black";
		document.getElementById("msgdb").innerHTML="Valid Date";
	}
}

	function fphn(){
	var phn=document.frm.phone.value; //document=DOM object
	if(phn.length!=11){
		document.frm.phone.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msgphn").innerHTML="Valid Phone Number Length Is 11";
	}
	else{
		document.frm.phone.style.color="black";
		document.getElementById("msgphn").innerHTML="Valid Phone Number";
	}
}
	function femail(){
	var em=document.frm.email.value; //document=DOM object
	var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(em.match(mailformat)){
		document.frm.email.style.color="black";
		document.getElementById("msgemail").innerHTML="Valid Email Id";
	}
	else{
		document.frm.email.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msgemail").innerHTML="Invalid Email Id";
	}
}
	function fpass(){
	var ps=document.frm.pass.value; //document=DOM object
	if(ps.length<5){
		document.frm.pass.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msgpass").innerHTML="Please Type A Stronger Password!";
	}
	else if(ps.length>=5 && ps.length<8){
		document.frm.pass.style.color="blue";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msgpass").innerHTML="Medium Password!";
	}
	else if(ps.length>=8){
		document.frm.pass.style.color="green";
		document.getElementById("msgpass").innerHTML="Strong Password!";
	}
}
	function fcpass(){
	var cp=document.frm.confirmpass.value; //document=DOM object
	var ps=document.frm.pass.value;
	if(ps.length==0 && cp!=ps){
		document.frm.confirmpass.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msgcp").innerHTML="Please Enter A Password First!";
	}
	else if(cp!=ps){
		document.frm.confirmpass.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msgcp").innerHTML="Passwords Must Match!";
	}
	else if(ps.length!=0 && cp==ps){
		document.frm.confirmpass.style.color="green";
		document.getElementById("msgcp").innerHTML="Passwords Matched!";
	}
}

</script>
<form id="frm" action="regval.php" method="post" name="frm"><pre>
Your Name: 	

<input onkeyup="fname()" type="text" name="name" id="valname">  <span id="msgfn"></span></br>
Username:

<input type="text" name="uname" onkeyup="showHint(this)" onkeyup="funame()" id="uname"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden"> <span id="msgun"></span></br>
<p id="txtHint"></p>
Date Of Birth:

<input onclick="fdob()" onkeyup="fdob()" type="date" name="dob" id="valdob">	<span id="msgdb"></span><br/>
Enter Your Gender:

<input type="radio" name="gender" value="male" checked>Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other

Select User Type:

<input type="radio" name="utype" value="admin">Admin
<input type="radio" name="utype" value="manager">Manager
<input type="radio" name="utype" value="developer">Developer
<input type="radio" name="utype" value="client" checked>Client

Enter Phone Number:

<input onkeyup="fphn()" type="text" name="phone" id="valphone">   <span id="msgphn"></span><br/>
Enter Email Id:

<input onkeyup="femail()" type="text" name="email" id="valemail">  <span id="msgemail"></span><br/>
Enter Password:

<input onkeyup="fpass()" type="password" name="pass" id="valpass">  <span id="msgpass"></span><br/>
Confirm Password:

<input onkeyup="fcpass()" type="password" name="confirmpass" id="valconfirmpass">  <span id="msgcp"></span><br/>

<input type="submit" onclick="return validate()" name="sbt" value="Submit" />  <span id="msgall" style="color:red"></span>
</pre>
</form>
</br></br>

<div class="footer">
  Website originally developed! &nbsp;E-mail: ourmail@mail.com</br>
  Phone: +99123422 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Address: Address here</br>
</div>