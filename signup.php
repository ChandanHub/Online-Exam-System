<DOCTYPE! html>
 <html>
  <head>
   <title>Sign up</title>
   <style>
   img.a {
    position: absolute;
    left: 2px;
    top: 2px;
    z-index: +1;
}
div.part {
	position: static;
	height: 800px;
    width: 70%;
    border: 1px solid yellow;
    background-color:cyan;
	margin-top: 30px;
    margin-bottom: 0px;
    margin-right: 200px;
    margin-left: 200px;
	}
</style>
   <script language="javascript" type="text/javascript" >
   function checkinput()
   {
if (document.det.username.value=="")
  {
  alert("enter your Name");
  document.det.username.focus();
  return false;
  }
 
if (document.det.fname.value=="")
  {
  alert("enter your Father Name");
  document.det.fname.focus();
  return false;
  } 
 if (document.det.gen.value=="")
  {
  alert("select your gender");
  
  return false;
  } 
  if (document.det.sem.value=="select")
  {
  alert("select your semester");
 
  return false;
  } 
  if (document.det.bra.value=="")
  {
  alert("enter your Branch");
  document.det.bra.focus();
  return false;
  } 
  if (document.det.coll.value=="")
  {
  alert("enter your College Name");
  document.det.pass.focus();
  return false;
  } 
  if (document.det.hn.value=="")
  {
  alert("enter your House/Building Number");
  document.det.hn.focus();
  return false;
  } 
  if (document.det.str.value=="")
  {
  alert("enter your Street Number");
  document.det.str.focus();
  return false;
  } 
  if (document.det.ct.value=="")
  {
  alert("enter your City Name");
  document.det.ct.focus();
  return false;
  } 
  if (document.det.sta.value=="")
  {
  alert("enter your State Name");
  document.det.sta.focus();
  return false;
  } 
  if (document.det.pn.value=="")
  {
  alert("enter PIN Number");
  document.det.pn.focus();
  return false;
  } 
  
 
  
  if(document.det.pass.value=="")
	    {
		 alert("Password cannot be blank");
				document.det.pass.focus();  
	            return false;
		}
  if((document.det.pass.value) != (document.det.cpass.value))
				{
				alert("Password Does not Match");
				document.det.pass.focus();
                return false;
				}	
	   
   }

   </script>
  </head>
    <body bgcolor="DarkCyan">
	<a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a>
<table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>Fill  Your  Details</b><h1></center></td></tr>
</table><hr>
<center>
<div class="part">
<form action="given.php" name="det" onsubmit="return checkinput()" method="POST">
<br><br>
Name: &emsp; <input type="text" name="username" /><br><br>
Father Name: &emsp; <input type="text" name="fname" /><br><br>
Gender &emsp;  <input type="radio" name="gen" value="male" />Male
       <input type="radio" name="gen" value="female" />Female <br><br>
Semester: &emsp;  <select name="sem" >
<option>select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select> <br><br>
Branch: &emsp; <input type="text" name="bra" /><br><br>
College: &emsp; <input type="text" name="coll" /><br><br>
<h1 style="color:red;"> Address </h1>
<table border="1" width="50%" >
<tr align="center" bgcolor="orange"><td></td><td></td></tr>
<tr align="center"><td>House/Building </td><td><input type="text" name="hn"></td></tr>
<tr align="center"><td>Street no. </td></td><td><input type="text" name="str"></td></tr>
<tr align="center"><td>City </td><td><input type="text" name="ct"></td></tr>
<tr align="center"><td>State </td><td><input type="text" name="sta"></td></tr>
<tr align="center"><td>Pin no. </td><td><input type="text" name="pn"></td></tr>
</table><br><hr>
<br>
Create password: &emsp; <input type="password" name="pass" /><br><br>
Confirm password: &emsp; <input type="password" name="cpass" /><br>
 <br><br><br>
<input type="submit" style="width:150px;height:50px;color:white;background-color:DarkMagenta" />
<br><br>
</form>
</div>
</center>
    </body>
 </html>
