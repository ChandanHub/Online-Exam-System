<DOCTYPE! html>
 <html>
  <head>
   <title>Online Exam Home</title>
   <script language="javascript" type="text/javascript" >
function checkinput()
{
if (document.logf.userid.value=="")
  {
  alert("enter your ID");
  document.logf.userid.focus();
  return false;
  }
 
if (document.logf.pass.value=="")
  {
  alert("enter your Password");
  document.logf.pass.focus();
  return false;
  }
 }
</script>
   <style>
   
   div.login {
	position: static;
	height: 200px;
    width: 20%;
    border: 1px solid blue;
	margin-top: 10px;
    margin-bottom: auto;
    margin-right: auto;
    margin-left: 25px;
    background-color: cyan;
	
}
  div.signup {
	position: static;
	height: 120px;
    width: 20%;
    border: 1px solid blue;
    margin: 10px 800px auto 25px;
    background-color: cyan;
	
}
div.message {
	position: static;
	height: 170px;
    width: 20%;
    border: 1px solid blue;
    margin: 10px 800px auto 25px;
    background-color: cyan;
	
}

div.add {
	position: absolute;
	height: 350px;
    width: 20%;
    border: none;
	top: 150px;
    left: 79%;
    background-color: none;
	
}
div.share {
	position: absolute;
	height: 150px;
    width: 20%;
    border: none;
	top: 520px;
    left: 79%;
    background-color: none;
	
}
div.words {
	position: absolute;
	height: 300px;
    width: 45%;
    border: none;
	top: 350px;
    left: 28%;
    background-color: none;
	
}
img.logo {
    position: absolute;
    left: 2px;
    top: 2px;
    z-index: +1;
}
body {
    background-image: url("home.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
a.top:link, a.top:visited {
    background-color: #f44336;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	
}


a.top:hover, a.top:active {
    background-color: green;
	
}
p {
    font-size: 30px;
	font-weight: 900;
	font-style: italic;
}
  
	</style>
  </head>
    <body >
<img class="logo" src="TT.png" style="width:150px;height:120px;">
<table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>Wlecome to CAA Online Exam Portal !!</b><h1></center></td></tr>
<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a class="top" href="feed.html" target="_blank"><b> Feedback</b></a>
<a class="top" href="aboutus.html" target="_blank"><b> About Us</b></a>
<a class="top" href="contact.html" target="_blank"><b> Contect Us</b></a></td></tr>
</table><hr>
<div class="login">
<form action="login.php" name="logf" onsubmit="return checkinput()" method="POST">
<br><table width="100%" border="0" bgcolor="CCFFCC" >
<tr ><td style="color:red"><center><h2>Login</h2></center></td></tr>
</table><br>

User id:  &emsp;  <input type="text" name="userid" /><br><br>
Password: &emsp;  <input type="password" name="pass" /><br><br>
<center><input type="submit" /></center>

</form></div>
<div class="signup">
<br><table width="100%" border="0" bgcolor="CCFFCC"  >
<tr ><td style="color:red"><center><h2>Signup</h2></center></td></tr>
</table><br>
<center><a href="signup.php"><button>click here to signup</button></a></center>
 </div>
 <div class="message">
 <br><table width="100%" border="0" bgcolor="CCFFCC" >
<tr ><td style="color:red"><center><h2>Message</h2></center></td></tr>
</table><br>
<p style="color:990000"><b><marquee> Teacher's Login Section Will Be Added Soon !! </marquee></b></P>
 </div>
 <div class="words">
<p style="color:DarkGoldenRod">
Today Online Examination System has become a fast growing examination method because of its speed and accuracy. It is also needed less manpower to execute the examination. Almost all organizations now-a-days, are conducting their objective exams by online examination system, it saves students time in examinations
</p>
</div> 

<div class="add">
<table width="100%" border="0" bgcolor="CCFFCC"  >
<tr ><td style="color:red"><center><h2>Advertisement</h2></center></td></tr>
</table><br>
<marquee behavior="scroll" direction="left">
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<img  src="add1.png" style="width:421px;height:151px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<img  src="add2.png" style="width:557px;height:141px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<img  src="add3.png" style="width:226px;height:200px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<img  src="add5.png" style="width:612px;height:140px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<img  src="add4.png" style="width:300px;height:200px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
</marquee>
</div>
<div class="share">
<table width="100%" border="0" bgcolor="CCFFCC" >
<tr ><td style="color:red"><center><h2>Share</h2></center></td></tr>
</table><br>
<a href="https://www.facebook.com"><img  src="fb.png" style="width:60px;height:60px;"></a>&emsp;&emsp;
<a href="https://twitter.com/"><img  src="tw.png" style="width:60px;height:60px;"></a>&emsp;&emsp;
<a href="https://mail.google.com"><img  src="go.png" style="width:60px;height:60px;"></a>
</div>
    </body>
 </html>
