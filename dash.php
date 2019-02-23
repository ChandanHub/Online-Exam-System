<DOCTYPE! html>
 <html>
  <head>
   <title>DashBoard</title>
   <style>
 div.links {
	position: static;
	height: 100%;
    width: 20%;
    border: 1px solid Orchid;
    margin: 10px 800px auto 25px;
    background-color:LightYellow;
	}
img.a {
    position: absolute;
    left: 2px;
    top: 2px;
    z-index: +1;
}
img.b {
    position: absolute;
    left: 0px;
    top: 0px;
	right: 0px;
    z-index: -1;
}
  img.out {
    position: absolute;
    right: 18px;
    top: 18px;
    z-index: +1;
}
div.updates {
	position: absolute;
	height: 280px;
    width: 20%;
    border: 1px solid blue;
	top: 100px;
    left: 79%;
    background-color: PapayaWhip;
	
}

</style>
  </head>
  <body >
  <a href="logout.php"><img class="out" src="out.png" style="width:109px;height:42px;"></a>
  <a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a>
  <img class="b" src="dash.jpg" style="width:100%;height:100%;">
<table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>Wlecome to Our DashBoard !!</b><h1></center></td></tr>
</table><hr>
  <div class="links"><center><br>
  
  <table width="100%" border="0" bgcolor="PowderBlue" height="50px" >
<tr ><td style="color:orange"><center><h1><b>Select Your Course</b><h1></center></td></tr>
</table><hr>
   <button style="width:150px;height:50px;"  ><b><a href="phpquiz.php" >PHP</a></b></button><br><br>
  <button style="width:150px;height:50px;"  ><b><a href="javaquiz.php" >Java</a></b></button><br><br>
   <button style="width:150px;height:50px;"  ><b><a href="cquiz.php" >C</a></b></button><br><br>
   <button style="width:150px;height:50px;"  ><b><a href="cloudquiz.php" >Cloud Computing</a></b></button><br><br>
   <button style="width:150px;height:50px;"  ><b><a href="dcommquiz.php" >Data Communication</a></b></button><br><br>
   <button style="width:150px;height:50px;"  ><b><a href="dsquiz.php" >Data structure</a></b></button><br><br>
   <button style="width:150px;height:50px;"  ><b><a href="dbmsquiz.php" >DBMS</a></b></button><br><br>
  <br><br>
</center></div>
 <div class="updates">
 <br><table width="100%" border="0" bgcolor="CCFFCC" >
<tr ><td style="color:red"><center><h2>News Updates</h2></center></td></tr>
</table><br>
<p style="color:990000"><b><marquee >Quiz number 3 and 4 will be Uploaded later  </marquee></b></P>
</div>
  
  </body>
  </html>